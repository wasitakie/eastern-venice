<?php
session_start();
$_SESSION["idOrder"] = rand(000, 999) . md5(date("dmYHis"));
header("location: pages/index.php");
