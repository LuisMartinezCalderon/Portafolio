<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ .'/vendor/autoload.php';




$name = $_POST["name"];

$phone = $_POST["phone"];
        




$mail = new PHPMailer();


$mail->isSMTP();


$mail->Host = 'smtp.gmail.com';

$mail->Port = 465;

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

$mail->SMTPAuth = true;


$mail->Username = 'mm6704924@gmail.com';


$mail->Password = 'emenpeaqtdyvlqdk';


$mail->setFrom('mm6704924@gmail.com');




$mail->addAddress('luismartinez2000x@gmail.com',$_POST["name"]);

$mail->Subject = $asunto = $_POST["asunto"];





$mail->msgHTML( '<h2>'. $message = $_POST["message"] ."<br/>" . '</h2>' .'<h3>Email:'."".$_POST["email"]
."<br/>" . "Name : " .$_POST["name"] . " <br/>"
  . "Phone : ".$_POST["phone"]);


if (!$mail->send()) {
    echo 'Mailer Error: ';
} else {
    echo"<script>
    window.location='index.html';
    </script>";
}
  



?>   