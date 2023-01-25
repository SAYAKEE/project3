<?php

include("../vendor/autoload.php");

use Helpers\Http;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$email = $_POST["email"];
$password = $_POST["password"];

$usersTable = new UsersTable(new MySQL);

$user = $usersTable->login($email, $password);

if($user)
{
    session_start();

    $_SESSION["user"] = $user;

    Http::redirect("/home.php");
    
}else{
    Http::redirect("/index.php", "login=fail");
}
