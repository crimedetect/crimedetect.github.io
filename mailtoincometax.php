<?php
require 'PHPMailerAutoload.php';
$subject=$_POST['subject'];
$filepath=$_POST['filename'];
$message=$_POST["message"];
$second=$_POST['second'];
$s=mb_substr($second, 0, -4);
$l=$_POST['third'];
$fname=$_POST['fname'];
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 's8crimedetect@gmail.com';                 // SMTP username
$mail->Password = 'project.s8@2020';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('s8crimedetect@gmail.com', 'crimedetect');
$mail->addAddress('Anwarmuhammed45@gmail.com','Incometax');     // Add a recipient
$mail->addReplyTo('s8crimedetect@gmail.com', 'crimedetect');

$mail->addAttachment("$filepath");         // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = '<body>The incident was uploaded to crimedetect website in date under the categery categery in location $loc with the following description '.$message.'. The video/image was checked for forgery and hope this can be a crucial evidence for the investigation</body>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	session_start();
	$u=$_SESSION['username'];
	$conn = mysqli_connect("localhost","root","","crimedetect");
	$sql="select * from log where usr='$u'";
	$m=mysqli_query($conn,$sql);
	$check = mysqli_num_rows($m);
	$r=mysqli_fetch_array($m);
	if($check == 1)
		{
			$sql = "DELETE FROM imgincometax WHERE filedestination='$filepath'";
			if (mysqli_query($conn, $sql)) {
						$path=$filepath;
						if(!unlink($path)){
							echo 'error';
						}else{
							$elapath=$s.".ela.jpg";
							$copypath=$l."/copy".$fname;
							unlink($elapath);
							unlink($copypath);
							echo "Record deleted successfully";
							header("location:incometaximgcheck.php?Email_Successfully_sended&delete_success");
						}
				}else {
				echo "Error deleting record: " . mysqli_error($conn);
			}
		}
}
?>