<?php

$recepient = "info@inlife.kz";
$sitename = "Inlife.kz";

$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$msg = trim($_POST["message"]);
$message = "Email: $email \nТелефон: $phone \nСообщение: $msg";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message);
?>