<?php
ob_start();
session_start();
include_once('./connect.php');
$error=null;// biến để lưu lỗi ở server
$success="";// chuỗi thông báo thành công(1 chuỗi)
?>
<?php
// if (isset($_SESSION['account'])) {
//     header('Location: header-member.php');
// }
if(isset($_POST['submit']))
{
    $username= trim($_POST['username']); 
    $password= trim($_POST['password']); 

    // Tìm xem có tài khoản nào:
    // +Tên đăng nhập trùng với thông tin username
    // +Mật khẩu trùng với password
    // => Ko có báo lỗi và yêu cầu nhập lại
    // =>Khớp: lưu thông tin bằng session và load sang trang chủ.

    $query = "SELECT * from accounts where (username='{$username}') and password='{$password}' and role='Member'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0) //ktra xem co bao nhieu ban ghi
    {
        $account=$result->fetch_array(MYSQLI_ASSOC); //fetch_array đọc kết quả của reuslt (tìm và trả về kq của câu truy vấn)
        $_SESSION['account']=$account;
        header('Location: home_member.php');
    }
    else
    {
        // Đăng nhập thất bại
        $error="Thông tin đăng nhập chưa đúng. Vui lòng đăng nhập lại";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf8" />
	<title>Login_IT_Supporter</title>
	<link rel="stylesheet" type="text/css" href="css/dangnhap.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
		<section class="vh-100 " style="background-color: #FF6600; height:100vh">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col col-xl-10">
						<div class="card" style="border-radius: 1rem;">
							<div class="row g-0">
								<div class="col-md-6 col-lg-5 d-none d-md-block ">
									<img src="./assets/img/member.jpg" alt="login" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%; object-fit:cover;" />
								</div>

								<div class="col-md-6 col-lg-7 d-flex align-items-center">
									<div class="card-body p-4 p-lg-5 text-black">

										<form method="post">
											<div class="d-flex align-items-center mb-3 pb-1">
												<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
												<span class="h1 fw-bold mb-0">Chào bạn đến với IT_SUPPORTER</span>
											</div>

											<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

											<div class="form-outline mb-4">
												<label class="form-label" for="form2Example17">User Name</label>
												<input type="text" required id="form2Example17" name="username" class="form-control form-control-lg" />

											</div>

											<div class="form-outline mb-4">
												<label class="form-label" for="form2Example27">Password</label>
												<input type="password" required id="form2Example17" name="password" class="form-control form-control-lg" />
												<center><span style="color:red;"><?php echo $error; ?></span></center>
											</div>

											<div class="pt-1 mb-4">
												<button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Login</button>
											</div>

											<a class="small text-muted" href="#!">Forgot password?</a>
											<p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"f style="color: #393f81;">Register here</a></p>
											<a href="#!" class="small text-muted">Terms of use.</a>
											<a href="#!" class="small text-muted">Privacy policy</a>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</body>
</html>
