<?php

// Use correct namespaces

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



// Manually include PHPMailer classes

require 'PHPMailer/PHPMailer/src/Exception.php';

require 'PHPMailer/PHPMailer/src/PHPMailer.php';

require 'PHPMailer/PHPMailer/src/SMTP.php';



require_once 'db.php'; // DB connection file

$conn = connect_db();



// Enable error reporting (optional for debugging)

error_reporting(E_ALL);

ini_set('display_errors', 1);



// Check DB connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $name = trim($_POST["name"]);

    $email = trim($_POST["email1"]);

    $mobile = trim($_POST["mobile"]);



    // Validation

    if (empty($name) || empty($email) || empty($mobile)) {

        die("All fields are required.");

    }



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        die("Invalid email format.");

    }



    if (!preg_match('/^[0-9]{10}$/', $mobile)) {

        die("Mobile number must be 10 digits.");

    }



    // Escape inputs

    $name = mysqli_real_escape_string($conn, $name);

    $email = mysqli_real_escape_string($conn, $email);

    $mobile = mysqli_real_escape_string($conn, $mobile);



    // Insert into DB

    $sql = "INSERT INTO contacts (name, email, mobile) VALUES ('$name', '$email', '$mobile')";



    if (mysqli_query($conn, $sql)) {



        $mail = new PHPMailer(true);

        try {

            // SMTP Configuration

            $mail->isSMTP();

            $mail->Host       = 'Host';

            $mail->SMTPAuth   = true;

            $mail->Username   = ''; // your SMTP email

            $mail->Password   = '';           // use secure method in production

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            $mail->Port       = 587;



            $mail->isHTML(true);

            $mail->setFrom('', '');



            // === Email to user ===

            // $mail->addAddress($email, $name);

            // $mail->Subject = 'Thank You for Contacting Us!';

            // $mail->Body = "

            //     Hi <strong>$name</strong>,<br><br>

            //     Thank you for contacting us.<br><br>

            //     <b>Name:</b> $name<br>

            //     <b>Email:</b> $email<br>

            //     <b>Mobile:</b> $mobile<br><br>

            //     We’ll get back to you soon.<br><br>

            //     Regards,<br>

            //     Brandcare Team

            // ";

            // $mail->send();



            // === Email to Admin ===

            $mail->clearAddresses();

            $mail->addAddress('Youremailid', 'Admin');

            $mail->Subject = 'Team Datar Cancer Genetics';

            $mail->Body = "

    <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; font-family: Arial, sans-serif;'>

        <tr>

            <th align='left'>Name</th>

            <td>$name</td>

        </tr>

        <tr>

            <th align='left'>Email</th>

            <td>$email</td>

        </tr>

        <tr>

            <th align='left'>Mobile</th>

            <td>$mobile</td>

        </tr>

    </table>

    <br>

    <p style='font-family: Arial, sans-serif;'>Submitted via website.</p>

";



            $mail->send();



            echo "Your submission was successful.";



        } catch (Exception $e) {

            echo "Form submitted, but email could not be sent. Error: {$mail->ErrorInfo}";

        }



    } else {

        echo "Database Error: " . mysqli_error($conn);

    }



    mysqli_close($conn);

} else {

    echo "Invalid request.";

}

?>

