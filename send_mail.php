<?php
// Check honeypot field
if (!empty($_POST['website'])) {
    die("Spam detected. Submission rejected.");
}

// Verify reCAPTCHA
$recaptcha_secret = "6LeyaA0rAAAAAD1JJSK3mir7gL7yBjmEoXfo_1-y";
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];
$recaptcha_options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($recaptcha_data)
    ]
];
$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_json = json_decode($recaptcha_result, true);

if (!$recaptcha_json['success']) {
    die("reCAPTCHA verification failed. Please try again.");
}

// Basic form validation
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if (!preg_match("/^[a-zA-Z\s\.\-]+$/", $name)) {
    die("Invalid name. Only letters, spaces, periods, and hyphens are allowed.");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}
if (preg_match("/(http|https|www\.)/i", $message)) {
    die("URLs are not allowed in the message.");
}

// Rest of your existing code
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.livemail.co.uk';
    $mail->SMTPAuth = true;
    $mail->Username = 'office@christopherwardconstruction.com';
    $mail->Password = 'Breeze8!River&45Mountain'; // Update if incorrect
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('office@christopherwardconstruction.com', $name);
    $mail->addAddress('office@christopherwardconstruction.com');
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

    $mail->send();
    header('Location: success.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
