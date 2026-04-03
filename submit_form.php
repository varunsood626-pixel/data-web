<?php

require_once 'db.php';
$conn = connect_db();

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $contact_method = $_POST['contact_method'] ?? '';
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $customer_type = $_POST['customer_type'] ?? '';
    $solution = isset($_POST['solution']) ? implode(", ", $_POST['solution']) : '';

    $errors = [];

    if (empty($first_name)) $errors[] = "First name required.";
    if (empty($last_name)) $errors[] = "Last name required.";
    if (!in_array($contact_method, ['email', 'phone'])) $errors[] = "Select contact method.";
    if ($contact_method == 'email' && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email required.";
    if ($contact_method == 'phone' && !preg_match('/^[0-9]{10,15}$/', $phone)) $errors[] = "Valid phone required.";
    if (empty($message)) $errors[] = "Message required.";
    if (!in_array($customer_type, ['new', 'existing'])) $errors[] = "Select customer type.";
    if (empty($solution)) $errors[] = "Select at least one solution.";

    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'message' => implode("<br>", $errors)]);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contact_us (first_name, last_name, contact_method, email, phone, message, customer_type, solution, submitted_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    if (!$stmt) {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
        exit;
    }
    $stmt->bind_param("ssssssss", $first_name, $last_name, $contact_method, $email, $phone, $message, $customer_type, $solution);
    if (!$stmt->execute()) {
        echo json_encode(['status' => 'error', 'message' => 'Database error.']);
        exit;
    }

    // Email sending as in your code
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp-legacy.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'brandcare@brandcare.net';
        $mail->Password = 'Docintosh@2024';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('brandcare@brandcare.net', 'Brandcare Website');
        $mail->addAddress('gagan@docintosh.com', 'Admin');
        $mail->isHTML(true);
        $mail->Subject = 'Team Datar Cancer Genetics';

        $mail->Body = "
        <h3>New Contact Form Submission</h3>
        <table border='1' cellpadding='8'>
            <tr><td>First Name</td><td>{$first_name}</td></tr>
            <tr><td>Last Name</td><td>{$last_name}</td></tr>
            <tr><td>Contact Method</td><td>{$contact_method}</td></tr>
            <tr><td>Email</td><td>{$email}</td></tr>
            <tr><td>Phone</td><td>{$phone}</td></tr>
            <tr><td>Customer Type</td><td>{$customer_type}</td></tr>
            <tr><td>Solutions</td><td>{$solution}</td></tr>
            <tr><td>Message</td><td>{$message}</td></tr>
        </table>";

        $mail->send();
    } catch (Exception $e) {
        // Log error or ignore
    }

    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully.']);
    exit;
}

echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
