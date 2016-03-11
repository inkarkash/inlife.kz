<?php

$recepient = "info@inlife.kz";
$sitename = "Inlife.kz";

$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = trim($_POST["message"]);
$message = "Email: $email \nТелефон: $phone \nСообщение: $message";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");