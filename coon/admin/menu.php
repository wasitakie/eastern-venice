<?php
session_start();

include '../coon/config.php';
include 'session/sessionAdmin.php';
?>
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>

    <a class="nav-link" href="aboutUs.php" style="margin-top: -1.5rem;">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>aboutUs </span></a>

    <a class="nav-link" href="slide.php" style="margin-top: -1.5rem;">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>เพิ่ม slide</span></a>


    <a class="nav-link" href="menuProduct.php" style="margin-top: -1.5rem;">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>เพิ่มเมนูสินค้าหลัก</span></a>
</li>