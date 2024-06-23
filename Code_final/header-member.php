<?php
ob_start();
session_start();
include_once('./connect.php');
// include_once('./login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>	
</head>

<body>
    <div class="header">
        <div class="center flex">
            <div class="hd-left flex">
                <a href="#"><img src="./assets/img/logo.jpg" alt="logo" class="logo" /></a>
                <a class="hd-padding hd-nav" href="./home_member.php">Trang chủ</a>
                <a class="hd-padding hd-nav" href="./tintuc_member.php">Tin tức</a>
                <a class="hd-padding hd-nav" href="./techsupport_member.php">Tech-Support</a>
                <a class="hd-padding hd-nav" href="./taophieu.php">Phiếu yêu cầu hỗ trợ</a>
            </div>
            <div class="hd-right relative flex">
                <i class="fa-regular fa-lightbulb hd-mode" style="color: #666;"></i>
                <i class=" fa-sharp fa-solid fa-magnifying-glass hd-search" style="color: #666;"></i>
                <span class="header-hi">
                    <?php
                        echo $_SESSION['account']['username'];
                    ?>
                </span>
                <div class="header-avt flex-col">
                    <div alt="avatar" class="header-avt-img"></div>
                    <div class="header-avt-nav">
                        <a href="#">Cài đặt</a>
                        <a href="./logout.php">Đăng xuất</a>
                    </div>
                </div>


                <!-- <select class="btn select-mode">
                    <option value="Select mode">---- Select mode ----</option>
                    <option value="Khách/Thành viên thường">Khách/Thành viên thường</option>
                    <option value="Thành viên CLB ">Thành viên CLB</option>
                    <option value="Kiểm duyệt viên CLB">Kiểm duyệt viên CLB</option>
                    <option value="Admin">Admin</option>
                </select> -->
            </div>
        </div>
    </div>