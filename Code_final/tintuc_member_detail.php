<?php
include_once('./header-member.php');
?>
<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql = "SELECT * FROM blog WHERE id='$id'"; // Câu lệnh select
  $query = mysqli_query($conn, $sql); // thực hiện câu lệnh query - select. Kết quả trả về là 1 mảng collection (các row)
  $rn = $query->fetch_array(MYSQLI_ASSOC); // Lấy bản ghi đầu tiên của kết quả
  if(mysqli_num_rows($query)  == 0) {
    header('Location: home.php');
  }

  $sql = "SELECT * FROM blog WHERE id <> '$id'  ORDER BY id DESC LIMIT 5";
  $query_blog = mysqli_query($conn, $sql);
} else {
  header('Location: home.php');
}
?>
<?php  
    while($row = mysqli_fetch_array($query_blog)){ /////<!-- Lấy từng bản ghi trong kết quả truy vấn -->
      $id = $row['id'];
      $title = $row['title'];
      $created_at = $row['created_at'];
    }
?>
<div class="container center flex tt-detail-container">
  <div class="tt-detail-left">
    <div class="page-header">
      <p class="tt-detail-time"> <?php echo $created_at ?> </p>
      <h1 class="tt-detail-title"><?php echo $rn['title']?></h1>
    </div>   
    <div id="news">
      <div id="news_image">
         <img alt="<?php echo $rn['title']; ?>" src="<?php echo $rn['image'] ?>" class="rounded" width="670">
      </div> 
      <div id="news_content">
        <p><?php echo $rn['content']; ?></p>
      </div>
    </div>   
  </div>
  <div class="tt-detail-right">
    <div class="tt-detail-right-title">
      <h3 class="mb30">Tin tức khác</h3>
    </div>
    <div class="tt-detail-right-content">
      <ul>
        <?php  
        $sql = "SELECT * FROM blog WHERE id <> '$id'  ORDER BY id DESC LIMIT 5";
        $query_blog = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query_blog)){ /////<!-- Lấy từng bản ghi trong kết quả truy vấn -->
          $id = $row['id'];
          $title = $row['title']; 
          $image = $row['image'];
          $content = $row['content'];
          $created_at = $row['created_at'];
        ?>
        <div class="col">
            <li class="bantin flex-col">
                <?php
                    echo "
                        <a href='tintuc_member_detail.php?id=$id'><img src='$image' width='100%' height='auto' /></a>
                        <p class='bantin-time'><i class='fa-solid fa-clock'></i> $created_at</p>
                        <a href='tintuc_member_detail.php?id=$id'><h2> $title </h2></a>
                        <a href='tintuc_member_detail.php?id=$id'><h4 class='bantin-tomtat'>$content </h4></a>
                        <a href='tintuc_member_detail.php?id=$id'><h4>Đọc thêm <i class='fa-solid fa-circle-right fa-xs'></i> </h4></a>";
                ?>
            </li>
        </div>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<?php
include_once('./footer.php')
?>