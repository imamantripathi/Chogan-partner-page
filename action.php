<?php
if(isset($_POST['submit'])) {
  // Get the form data
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  
  // Compose the email message
  $to = 'deepanshur213@gmail.com'; // Replace with the recipient's email address
  $subject = 'New message from your website';
  $body = "First Name: $fname\nLast Name: $lname\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";
  
  // Send the email
  if(mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    header('Location: index.html'); // Redirect to index.html
    exit;
  } else {
    // Email sending failed
    echo 'There was an error sending your message. Please try again later.';
  }
}
?>
