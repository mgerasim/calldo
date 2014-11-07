<?php

require("/usr/share/php/PHPMailer/class.smtp.php");
require("/usr/share/php/PHPMailer/class.phpmailer.php");

$mail = new PHPMailer;
//будем отравлять письмо через СМТП сервер
$mail->isSMTP();
//хост
$mail->Host = getenv('MGERASIM_INBOX_HOST');
//требует ли СМТП сервер авторизацию/идентификацию
$mail->SMTPAuth = true;
// логин от вашей почты
$mail->Username = getenv('MGERASIM_INBOX_USER');
// пароль от почтового ящика
$mail->Password = getenv('MGERASIM_INBOX_PASS');
//указываем способ шифромания сервера
$mail->SMTPSecure = 'ssl';
//указываем порт СМТП сервера
$mail->Port = getenv('MGERASIM_INBOX_PORT');

//указываем кодировку для письма
$mail->CharSet = 'UTF-8';
//информация от кого отправлено письмо
$mail->From = getenv('MGERASIM_INBOX_EMAIL');
$mail->FromName = 'Админ';
$mail->addAddress(getenv('MGERASIM_INBOX_DEST'));


$mail->Subject = 'Callback from Form';
$mail->Body = '84212322151 89241086744';

if( $mail->send() ){
   echo 'Письмо отправлено';
   }else{
      echo 'Письмо не может быть отправлено. ';
         echo 'Ошибка: ' . $mail->ErrorInfo;
         }
         ?>