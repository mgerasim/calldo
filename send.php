<?php

$e_mail = 'mgerasim.mail@gmail.com'; // Здесь необходимо прописать адрес, куда будет отправлено письмо (можно несколько через запятую)
$send_mail_subject = "";
$send_mail_text = $_REQUEST["phonea"]." ".$_REQUEST["phoneb"];

echo $send_mail_text;

$headers = "From: munged@gmail.com";
$headers .= "\r\nReply-To: munged@gmail.com";
$headers .= "\r\nX-Mailer: PHP/".phpversion();

mail($e_mail, $send_mail_subject, $send_mail_text, $headers, "-f mgerasim@inbox.ru");


?>
