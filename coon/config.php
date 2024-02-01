<?php

$localhost = 'localhost';
$username = 'root';
$password = 'root';
$mydb = 'eatern_venice';

$coon = new PDO("mysql:host=$localhost;dbname=$mydb", $username, $password);
$coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$coon->exec("set names utf8");

// if ($coon) {
//     echo "ok";
// } else {
//     echo "no";
// }
