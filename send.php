<?php
session_start(); // Start the session

function good_data($data){
    $result = trim($data);
    $result = htmlentities($data);
    $result = htmlspecialchars($data);
    $result = stripcslashes($data);
    return $result;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = good_data($_POST['name']);
    $email = good_data($_POST['email']);
    $subject = good_data($_POST['subject']);
    $message = good_data($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rickrambo29@gmail.com';
    $mail->Password = 'phgtqljdlwsukzsx';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('rickrambo29@gmail.com');
    $mail->Subject = "$email ($subject)";
    $mail->Body = $message;

    $mailSent = $mail->send();

    if ($mailSent) {
        // Email sent successfully
        $_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message sent successfully!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        // Email failed to send
        $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Message Failed to send!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    
    header("Location: ./index.php"); // Redirect back to the contact page
    exit(); // Make sure to exit after the header redirect
}
?>
