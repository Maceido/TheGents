<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// email parameters
$to = 'bugaz@benjaminbugaz.com';  
$subject = 'New form submission';
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";

// Compose the email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message\n";

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  header('Location: thank-you.html');
  exit();
} else {
  echo 'Oops! An error occurred. Please try again later.';
}
?>
