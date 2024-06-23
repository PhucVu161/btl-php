<?php
include_once('./header-member.php');
?>
<?php
    if(isset($_POST['submit']))
    {
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $dm_phieu=$_POST['dm_phieu'];
        $time_request=$_POST['time_request'];
        $problem_detail=$_POST['problem_detail'];
        $account = $_SESSION['account']['id'];
        $date = date('Y-m-d H:i:s');
        $sql="INSERT INTO phieu value(null,'$fullname','$email','$phone','$time_request',
        '$problem_detail','$dm_phieu','$account','$date','$date')";
        $query=mysqli_query($conn, $sql);
        header('Location: hoanthanhphieu.php');
    }
?>
<div class="body pb120 taophieu">
    <div class="taophieu-bg"></div>
    <div class="taophieu-box taophieu-note text-cen">Hãy đọc bài viết tại <a href="./techsupport_member.php">đây</a> để biết rõ bạn cần gì.</div>
    <div class="taophieu-box">
        <h1 class="text-cen taophieu-h1">Phiếu hỗ trợ</h1>
        <h3 class="text-cen taophieu-h3">IT Supporter luôn sẵn sàng bên bạn!</h3>
        <form action="" method="post" class="flex taophieu-form fs18">
            <div class="flex taophieu--line">
                <label for="fullname">Họ và tên:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nguyễn Văn A" required>
            </div>

            <div class="flex taophieu--line">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="ITsupporter@gmail.com" name="email" required>
            </div>

            <div class="flex taophieu--line">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" placeholder="+84 xxx xxx xxx" required>
            </div>
            <small style="margin-bottom: 12px;"><i>(Chúng tôi sẽ liên lạc với bạn qua số điện thoại này)</i></small>
            <div class="flex">
                <label for="category" class="flex-40">Danh mục vấn đề:</label>
                <select id="category" name="dm_phieu" require>
                    <?php
                        $sql ="select *from dm_phieu";
                        $results= mysqli_query($conn,$sql);
                        foreach($results as $item)
                        {
                            echo '<option selected value="'.$item['id'].'">'.$item['tendm'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <small style="margin-bottom: 12px;"><i id="taophieu-dm-giaithich">*IT Supporter hỗ trợ về cài đặt và cấu hình các ứng dụng, hệ điều hành, phần mềm bảo mật và các thiết bị khác.</i></small>
            <div class="flex">
                <label for="priority" class="flex-40 mr40">Thời gian yêu cầu hỗ trợ:</label>
                <div class="flex-col">
                    <div>
                        <input type="radio" id="priority1" name="time_request" value="Khẩn cấp" checked>
                        <label for="priority1">Khẩn cấp</label>
                    </div>
                    <div>
                        <input type="radio" id="priority2" name="time_request" value="Trong vòng vài ngày">
                        <label for="priority2">Trong vòng vài ngày</label>
                    </div>
                    <div>
                        <input type="radio" id="priority3" name="time_request" value="Trong vòng vài tuần">
                        <label for="priority3">Trong vòng vài tuần</label>
                    </div>
                    <div>
                        <input type="radio" id="priority4" name="time_request" value="Trong tháng này">
                        <label for="priority4">Trong tháng này</label>
                    </div>
                </div>
            </div>
            <!-- <div class="flex taophieu--line taophieu--text">
                <label for="name">Tiêu đề:</label>
                <input type="text" id="title" name="title" required placeholder="Mô tả ngắn gọn vấn đề">
            </div> -->
            <div class="flex taophieu--text">
                <label for="description">Mô tả chi tiết về vấn đề:</label>
                <textarea id="description" name="problem_detail" rows="6" cols="50" placeholder="Mô tả chi tiết vấn đề bạn cần được hỗ trợ" required></textarea>
            </div>
            <input class="submit-btn btn" type="submit" value="Gửi" name="submit">
        </form>
    </div>
    <div class="line-white"></div>
</div>
<?php
include_once('./footer.php')
?>