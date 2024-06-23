<!DOCTYPE html>
<html>
<head>
<title>Sửa Quảng Cáo</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php

// Kết nối Database
require('layouts/header.php'); ?>
<?php
require('./../connect.php'); ?>

<?php
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `phieu` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<div class="fix_form">
<form method="POST" class="form">
<h2>Xem thông tin phiếu yêu cầu</h2>
<label>FullName: <input type="text" value="<?php echo $row['fullname']; ?>" name="title"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="image"></label><br/>
<label>Phone: <input type="text" value="<?php echo $row['phone']; ?>" name="link"></label><br/>
<label>Thời gian yêu cầu: <input type="text" value="<?php echo $row['time_request']; ?>" name="link"></label><br/>
<label>Danh mục phiếu: <input type="text" value="<?php echo $row['id_dm_phieu']; ?>" name="link"></label><br/>
<label>Thành viên: <input type="text" value="<?php echo $row['id_accounts_phieu']; ?>" name="link"></label><br/>
<label>Ngày tạo: <input type="text" value="<?php echo $row['created_at']; ?>" name="link"></label><br/>
<div class="funtion">
        <ul>
           <li><a href="./ds_phieuyeucau.php"><button type="button" class="btn btn-warning">Oke</button></a></li>
        </ul>   
    </div>
</div>   

<?php require('layouts/footer.php'); ?>
</form>
</div>
</body>
</html>

<style>

.form h2{
    background-color: white;
 }

.fix_form{
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 20px;
    margin-left: 250px;
}

.form{
 width: 900px;
 padding: 20px 20px 5px 20px;
 margin: 0 auto;
 font-weight: 700px;
 background-color: white;
}

.form label{
    background-color: white;
}

.form input{
 width:  900px;
 height: 35px;
 padding: 10px 0;
 margin: 10px 0;
 border-radius: 5px;
 background-color: white;
}

.role{
margin: 7px 27px;
width: 30%;
height: 30px;
border-radius: 5px;
background-color: white;

}

.role option{
background-color: white;    
}

.gender{
margin: 7px 10px;
width: 30%;
height: 30px;
border-radius: 5px;
background-color: white;

}

.status{
margin: 7px 5px;
width: 100px;
height: 30px;
border-radius: 5px;
background-color: white; 
}



.oke{
 height: 35px;
 padding: 10px 0;
 margin-top: 35px;
 border-radius: 5px;
 width: 150px;
 background-color: #007bff;
 color: #fff;
 border: 1px solid #fff;
 margin-left: 75px;
}

.funtion{
    background-color: white;
    margin-left: 150px;
}

.funtion ul{
    display: flex;
    list-style: none;
    background-color: white;
}

.funtion ul li{
    margin: 0 60px;
    background-color: white;
    
}

.funtion input{
    width: 300px;
    background-color: #003333;
    color: #fff;
    border: 1px solid #fff;
}

</style>
