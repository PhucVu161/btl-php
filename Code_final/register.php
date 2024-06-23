<?php
include_once('./connect.php');
$error =null;
if (isset($_POST['submit'])) {
    /**
     * isset là kiểm tra có tại tại biến không?
     * $_POST: phương thức post của form 
     * $_POST['submit']: lấy giá trị trong phương thức post của form với name là submit
     * $_POST['username']: lấy giá trị trong phương thức post của form với name là username
     */
    $username =  trim($_POST['username']);
    $email =  trim($_POST['email']);
    $password =  trim($_POST['password']);
    // Làm việc với database
        /**
         * B1: Kiểm tra xem trong csdl đã có acccount tồn tại tên đăng nhập hoặc email nhập từ form chưa. 
         *     Có rồi thì thông báo nhập lại
         * B2: Nếu không có thì thêm dữ liệu từ form vào csdl
         */
        $query = "select * from accounts where username = '{$username}' OR email = '{$email}'"; // câu lệnh sql cần thực hiện
        $result = mysqli_query($conn, $query); // thực hiện lệnh sql => trả về 1 mảng (các bản ghi)
        // Đếm xem có bao nhiêu bản ghi thỏa mãn mãn câu sql. Nếu mà > 0 => thông báo
        if (mysqli_num_rows($result) > 0) { // mysqli_num_rows: kiểm tra (đếm) có bao nhiêu bản ghi (rows)
            // Thông báo 
            $error = "Tên đăng nhập hoặc email đã tồn tại";
        } else {
            // Thêm dữ liệu vào csdl
            $dt = date("Y-m-d H:i:s");
            $query = "insert into accounts values (null, '{$username}', '{$email}', '{$password}', 'Member', '${dt}', '${dt}', 'ACTIVE')";
            if (mysqli_query($conn, $query)) {
                //$success = "Thêm tài khoản thành công";
                header('location:./login.php');
            } else {
                $error= "Thêm tài khoản thất bại: " . mysqli_error($conn); // mysqli_error: là cú pháp hiện lỗi của mysqli
            }
        }
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); background-color: #FF6600;">
     <div class="mask d-flex align-items-center h-100 gradient-custom-3">
         <div class="container h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
                 <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                     <div class="card" style="border-radius: 15px;">
                         <div class="card-body p-5">
                             <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                             <form method="post" onsubmit="return validateForm();">
                                 <div class="form-outline mb-4">
                                     <label class="form-label" for="form3Example1cg">User Name</label>
                                     <input type="text" name="username" required id="form3Example1cg" class="form-control form-control-lg" />
                                 </div>
                                 <div class="form-outline mb-4">
                                     <label class="form-label" for="form3Example3cg">Your Email</label>
                                     <input type="email" name="email" required id="form3Example3cg" class="form-control form-control-lg" />
                                 </div>

                                 <div class="form-outline mb-4">
                                     <label class="form-label" for="form3Example4cg">Password</label>
                                     <input type="password" name="password" required id="form3Example4cg" class="form-control form-control-lg" id="password" />
                                 </div>
                                 <div class="form-outline mb-4">
                                     <label class="form-label" for="form3Example4cg">Confirm Password</label>
                                     <input type="password" required id="form3Example4cg" class="form-control form-control-lg" id="confirmation_password" />
                                     <center><span style="color:red;"><?php echo $error; ?></span></center>
                                 </div>
                                 <div class="d-flex justify-content-center">
                                     <button type="submit" name="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                 </div>

                                 <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="./login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                             </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <script type="text/javascript">
        function validateForm() {
            $pwd = $('#password').val();
            $confirmPwd = $('#confirmation_password').val();
            if($pwd != $confirmPwd) {
                alert("Password and Confirm Password Field do not match!")
                return false
            }
            return true
        }
</script>