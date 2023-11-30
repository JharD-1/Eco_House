<?php

// Extract form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate form data
if (empty($name) || empty($email) || empty($message)) {
  echo "Please fill out all required fields.";
  exit;
}

// Send email notification
$to = "recipient@example.com";
$subject = "Contact Form Submission";
$message = "From: $name\nEmail: $email\nMessage: $message";
$headers = "From: no-reply@example.com";

if (mail($to, $subject, $message, $headers)) {
  echo "Thank you for your message. We will be in touch soon.";
} else {
  echo "There was an error sending your message. Please try again later.";
}
