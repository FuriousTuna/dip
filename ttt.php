<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 23.07.2018
 * Time: 0:30
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



$to      = 'maksim-al@bk.ru';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: maxim12340@gmail.com' . "\r\n" .
	'Reply-To: maxim12340@gmail.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();



if (mail($to, $subject, $message, $headers)){
	echo "Сообщение успешно отправлено";
} else {
	echo "При отправке сообщения возникли ошибки";
}

/*
$to = ;
$subject = ;
$message = ;
$headers = ;

mail($to, $subject, $message, $headers);
*/