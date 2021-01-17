<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'utils/Exception.php';
require 'utils/PHPMailer.php';
require 'utils/SMTP.php';
require 'connect.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message =$_POST['message'];
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;    
        $mail->SMTPSecure = 'ssl';                           // Enable SMTP authentication
        $mail->Username = 'phongbeopro@gmail.com';                 // SMTP username
        $mail->Password = 'vtjvebdxprnzoybh';                           // SMTP password
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('phongbeopro@gmail.com', 'Super Team');
        $mail->addAddress($email, $name);     // Add a recipient
        $mail->addCC('phongbeopro@gmail.com');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->CharSet = "UTF-8"; 
        $mail->send();

        $sql = "insert into message(idteam, name, email, subject, message) values(1,'$name', '$email', '$subject', '$message')";
        echo $sql;
        mysqli_query($conn, $sql);
    } catch (Exception $e) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

