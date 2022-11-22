<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST['submit'])){
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->SMTPDebug=0; //this is very verbose, just for testing, change to 0
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'sganchrowlcmprogramminghw@gmail.com';
$mail->Password = 'ffhvxkeeodatczxl';
$mail->setFrom('sganchrowlcmprogramminghw@gmail.com');
$mail->addAddress('sganchrowlcmprogramminghw@gmail.com');
$mail->Subject = 'Form Submisssion';
$mail->Body = $_POST['first_name'] . " " . $_POST['last_name'] . " wrote the following from the email account: " . $_POST['email'] . ": " . "\n\n" . $_POST['message'];
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
}
?>
<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>
 <?php include "../templates/Header.php"; ?>
<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

