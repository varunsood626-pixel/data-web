<?php
require_once 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

header('Content-Type: application/json'); // Important for AJAX

$conn = connect_db();
$response = ['success' => false, 'message' => 'Something went wrong.'];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $contact_method = $_POST['contact_method'] ?? '';
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $customer_type = $_POST['customer_type'] ?? '';
    $solutions = isset($_POST['solution']) ? implode(", ", $_POST['solution']) : '';

    // Validation
    if (empty($first_name) || !preg_match("/^[a-zA-Z\s]+$/", $first_name)) {
        $errors[] = "Valid first name is required.";
    }

    if (empty($last_name) || !preg_match("/^[a-zA-Z\s]+$/", $last_name)) {
        $errors[] = "Valid last name is required.";
    }

    if (!in_array($contact_method, ['email', 'phone'])) {
        $errors[] = "Please select a valid contact method.";
    }

    if ($contact_method === 'email' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }

    if ($contact_method === 'phone' && !preg_match('/^[0-9]{10,15}$/', $phone)) {
        $errors[] = "A valid phone number is required (10-15 digits).";
    }

    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    if (!in_array($customer_type, ['new', 'existing'])) {
        $errors[] = "Please select your customer type.";
    }

    if (empty($solutions)) {
        $errors[] = "Please select at least one test solution.";
    }

    // If valid, insert + send email
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO contact_us 
            (first_name, last_name, contact_method, email, phone, message, customer_type, solution, submitted_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");

        if ($stmt === false) {
            $response['message'] = "Database error: " . $conn->error;
        } else {
            $stmt->bind_param("ssssssss", $first_name, $last_name, $contact_method, $email, $phone, $message, $customer_type, $solutions);
            if ($stmt->execute()) {
                try {
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host       = 'smtp-legacy.office365.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'brandcare@brandcare.net';
                    $mail->Password   = 'Docintosh@2024'; // Change in production
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    $mail->setFrom('brandcare@brandcare.net', 'Brandcare Website');
                    $mail->addAddress('bhavika@brandcare.net', 'Admin');

                    $mail->isHTML(true);
                    $mail->Subject = 'Team Datar Cancer Genetics';
                   $mail->Body = "
                        <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; font-family: Arial, sans-serif;'>
                            <tr><th align='left'>First Name</th><td>$first_name</td></tr>
                            <tr><th align='left'>Last Name</th><td>$last_name</td></tr>
                            <tr><th align='left'>Contact Method</th><td>" . ucfirst($contact_method) . "</td></tr>
                            <tr><th align='left'>Email</th><td>$email</td></tr>
                            <tr><th align='left'>Phone</th><td>$phone</td></tr>
                            <tr><th align='left'>Customer Type</th><td>" . ucfirst($customer_type) . "</td></tr>
                            <tr><th align='left'>Solutions</th><td>$solutions</td></tr>
                            <tr><th align='left'>Message</th><td>$message</td></tr>
                        </table>
                        <br><p style='font-family: Arial, sans-serif;'>Submitted from the website.</p>
                    ";

                    $mail->send();

                    $response['success'] = true;
                    $response['message'] = "Thank you for your message. We will get in touch with you shortly.";
                } catch (Exception $e) {
                    $response['message'] = "Form submitted, but email failed to send.";
                    error_log("Email error: {$mail->ErrorInfo}");
                }
            } else {
                $response['message'] = "Failed to save submission. Please try again.";
            }
        }
    } else {
        $response['message'] = implode('<br>', array_map('htmlspecialchars', $errors));
    }
}

echo json_encode($response);
exit;
