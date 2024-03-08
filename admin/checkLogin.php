<?php
session_start();
include '../coon/config.php';

$admin = $coon->prepare("SELECT * FROM admin WHERE admin_username = ? AND admin_password = ?");
$admin->execute([$_POST["user"], $_POST["pass"]]);

$num = $admin->rowCount();


if ($num == 0) {
    header("location:login.php");
} else {
    $row = $admin->fetch(PDO::FETCH_ASSOC);
    $_SESSION["admin"] = $row["admin_username"];
    header("location:index.php");
}
