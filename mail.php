<?php
$to = "ivann2402@mail.com";
$tema = "Данные учасника";
$message = "Имя" .$_POST['fname']."<br>";
$message .= "Фамилия".$_POST['iname']."<br>";
$message .= "Номер телефона".$_POST['tell']."<br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>

