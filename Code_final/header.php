<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nhóm20 || IT_SUPPORTER</title>
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>	
</head>

<body>
    <div class="header">
        <div class="center flex">
            <div class="hd-left flex">
                <a href="./home.php"><img src="./assets/img/logo.jpg" alt="logo" class="logo" /></a>
                <div class="hd-nav"><a class="hd-padding" href="./home.php">Trang chủ</a></div>
                <div class="hd-nav"><a class="hd-padding" href="./tintuc.php">Tin tức</a></div>
                <div class="hd-nav"><a class="hd-padding" href="./techsupport.php">Tech-Support</a></div>
                <!-- <div class="hd-nav"><a class="hd-padding" href="./taophieu.php">Tạo phiếu yêu cầu hỗ trợ</a></div> -->
            </div>
            <div class="hd-right flex">
                <i class="fa-regular fa-lightbulb hd-mode" style="color: #666;"></i>
                <i class=" fa-sharp fa-solid fa-magnifying-glass hd-search" style="color: #666;"></i>
                <div class="btn"><a href="./login.php">Đăng nhập</a></div> 
                <div class="login-container flex-center" id="login-container">
                    <i class="fa-solid fa-circle-xmark xl" id="login-close"></i>
                    <div class="login-layer" id="login-layer">
                        <div class="form-container sign-up-container">
                            <form action="./register.php" method="post">
                                <h1>Tạo tài khoản</h1>
                                <div class="social-container">
                                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <span>hoặc sử dụng email của bạn để đăng ký</span>
                                <input type="text" placeholder="Name" name="uername"/>
                                <input type="email" placeholder="Email" name="email"/>
                                <input type="password" placeholder="Password" class="mb16" name="password" />
                                <input type="password" placeholder="Enter the Password" class="mb16" />
                                <button type="submit">Đăng ký</button>
                            </form>
                        </div>
                        <div class="form-container sign-in-container">
                            <form action="./login.php" method="post" onsubmit="return handeFormSubmit()">
                                <h1>Đăng Nhập</h1>
                                <div class="social-container">
                                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <span>hoặc sử dụng tài khoản của bạn</span>
                                <input type="username" placeholder="UserName" name="username" />
                                <input type="password" placeholder="Password" name="password" />
                                <a href="#">Quên mật khẩu?</a>
                                <button type="submit" class="login-php" name="submit">Đăng nhập</button>
                            </form>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-left">
                                    <h1>Chào mừng bạn trở lại!</h1>
                                    <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                                    <button class="ghost" id="signIn">Đăng nhập</button>
                                </div>
                                <div class="overlay-panel overlay-right">
                                    <h1>Xin chào bạn!</h1>
                                    <p>Điền thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                                    <button class="ghost" id="signUp">Đăng ký</button>
                                </div>
                            </div>
                        </div>
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