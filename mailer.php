<?php
die();
if (!isset($_POST['ergdf3']))
	exit();
require ('vendor/autoload.php');

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'giburservice.info@yandex.ru';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';

$mail->setFrom('giburservice.info@yandex.ru', 'Расчет стоимости скваженны с сайта!!!');

$mail->addAddress("as.ky@ya.ru");


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта';
$mail->Body    = $_POST['msg'];

$mail->send();
echo "ok";

?>