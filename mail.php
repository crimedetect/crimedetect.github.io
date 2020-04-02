<!DOCTYPE html>
<html>
<head>
	<title>h</title>
</head>
<body>
<h1>HELLO</h1>
<?php
require 'PHPMailerAutoload.php';
$name=$_POST['name'];
$subject=$_POST['subject'];
$filepath=$_POST['filename'];
$messsage=$_POST['message'];
$mail=(string)$_POST['email'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 's8crimedetect@gmail.com';                 // SMTP username
$mail->Password = 's8project@2020';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('s8crimedetect@gmail.com', 'crimedetect');
$mail->addAddress('anwarmuhammed45@gmail.com','name');     // Add a recipient
$mail->addReplyTo('s8crimedetect@gmail.com', 'crimedetect');

$mail->addAttachment('$filepath');         // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	echo "$mail";
}
?>
</body>
</html>