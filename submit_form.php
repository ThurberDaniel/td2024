<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Specify the recipient email address
    $to = 'phxburg@gmail.com'; // Replace this with your email address
    
    // Build the email message
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from the contact form on your website.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";
    
    // Send the email
    mail($to, $email_subject, $email_body);
    
    // Redirect back to the contact form
    header("Location: contact.html");
    exit;
}
?>
