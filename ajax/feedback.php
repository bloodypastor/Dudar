<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);
if ($name == "" || $email == "" || $subject == "" || $message == "") {
    echo 'Заповніть всі поля';
    exit;
}

// Send message

$subject = "=?utf-8?B?".base64_encode($subject)."=?";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
if(mail('kosyno@ukr.net', $subject, $message, $headers ))
    echo 'Повідомлення відправленно';
else
    echo 'Повідомлення не відправлено';










