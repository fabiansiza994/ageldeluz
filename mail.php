<?php

$from = $_REQUEST['name'];
$msg = $_POST["message"];
$email = $_POST["email"];
$headers = "From: $from";
// send email
mail("aangelesprotectores@gmail.com","contacto desde el sitio web: ".$email, $msg, $headers);
header("Location:index.html");
?>