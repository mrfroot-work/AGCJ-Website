<?php
// Email configuration
$to = "malcolm.foort@gmail.com"; // AGCJ Info Email Address
$subject = "Message from Website";

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create email body
$body = "Name: " . $name . "\n";
$body .= "Phone: " . $phone . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Message: " . $message;

// Email headers
$headers = "From: " . $name . " <" . $email . ">";

// Send email
if (mail($to, $subject, $body, $headers)) {
  echo "Email sent successfully!";
} else {
  echo "An error occurred while sending the email.";
}
?>
