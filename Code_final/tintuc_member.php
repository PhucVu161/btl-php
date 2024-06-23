<?php
include_once('./header-member.php');
?>
<div>
  <div class="tintuc-top-banner">
      <div>
          <div>
            <img src="./assets/img/haui-banner-1.jpg" alt="I love Haui">
          </div>
      </div>
      <div>  
          <div>            
            <img src="./assets/img/haui-banner-2.jpg" alt="I love Haui">
        </div>
      </div>
      <div>
        <div>
            <img src="./assets/img/haui-banner-3.jpg" alt="I love Haui">
          </div>
      </div>
  </div>
  <div class="container center">
        <div class="row">
            <div class="ind flex" id="tt-member">
              <div class="ind-left flex">
                <div class="ind-slug-1 flex-col">
                  <p class="ind-slug-title">Thông báo</p>
                  <?php
                      $sql = "Select * from blog where slug not like 'IT_NEWS'";
                      $result =mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_assoc($result))
                      {
                          $idtin=$row['id'];
                          $tieude=$row['title'];
                          $image =$row['image'];
                          $content1=$row['content'];
                          $created_at=$row['created_at'];
                  ?>
                  <div class="col">
                      <li class="bantin flex-col">
                          <?php
                              echo "
                                  <a href='tintuc_member_detail.php?id=$idtin'><img src='$image' width='100%' height='auto' /></a>
                                  <p class='bantin-time'><i class='fa-solid fa-clock'></i> $created_at</p>
                                  <a href='tintuc_member_detail.php?id=$idtin'><h2>$tieude </h2></a>
                                  <a href='tintuc_member_detail.php?id=$idtin'><h4 class='bantin-tomtat'>$content1 </h4></a>
                                  <a href='tintuc_member_detail.php?id=$idtin'><h4>Đọc thêm <i class='fa-solid fa-circle-right fa-xs'></i> </h4></a>";
                          ?>
                      </li>
                  </div>
                  <?php } ?>
                </div>
                <div class="ind-IT-news flex-col">
                  <p class="ind-slug-title" style="margin-bottom: 20px;">Tin tức</p>
                  <p style="margin-bottom: 40px;">IT NEWS là blog cập nhật tin tức hàng ngày</p>
                  <?php
                      $sql = "Select * from blog where slug like 'IT_NEWS'";
                      $result =mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_assoc($result))
                      {
                          $idtin=$row['id'];
                          $tieude=$row['title'];
                          $image =$row['image'];
                          $content1=$row['content'];
                          $created_at=$row['created_at'];
                  ?>
                  <div class="col">
                      <li class="bantin flex-col">
                          <?php
                              echo "
                                  <a href='tintuc_member_detail.php?id=$idtin'><img src='$image' width='100%' height='auto' /></a>
                                  <p class='bantin-time'><i class='fa-solid fa-clock'></i> $created_at</p>
                                  <a href='tintuc_member_detail.php?id=$idtin'><h2>$tieude </h2></a>
                                  <a href='tintuc_member_detail.php?id=$idtin'><h4 class='bantin-tomtat'>$content1 </h4></a>
                                  <a href='tintuc_member_detail.php?id=$idtin'><h4>Đọc thêm <i class='fa-solid fa-circle-right fa-xs'></i> </h4></a>";
                          ?>
                      </li>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="ind-right">
                <div class="ind-sticky">
                  <p class="mb20"><b>Theo dõi chúng tôi tại:</b></p>
                  <a href="https://www.facebook.com/itsupporter.haui" target="_blank">
                    <img src="./assets/img/fb-small.jpg" alt="" style="width:100%;">
                  </a>
                  <a href="https://www.facebook.com/itsupporter.haui" target="_blank" class="fanpage"><i class="fa-brands fa-facebook"></i> Facebook</a>
                  <p class="mb20"><b>Bản đồ chỉ dẫn<br><span class="fs14">Trường đại học Công nghiệp Hà Nội</span></br></p>
                  <a href="https://www.google.com/maps?ll=21.053731,105.735107&z=15&t=m&hl=vi&gl=US&mapclient=embed&cid=2354416998981845914" target="_blank" class="map">
                    <img src="./assets/img/map.png" alt="map" class="map">
                    <div class="map-view">Xem bản đồ lớn hơn</div>
                  </a>
                </div>
              </div>
            </div>
        </div>    
    </div>
</div>

<style>
  h4{
    margin-top: 16px;
  }
  </style>
  
<div class="footer">
  <!-- <div class="line"></div> -->
  IT Supporter Website | Created by <a class="me" href="#">Nhóm 20</a>
</div>

<button onclick="goTop()" id="topBtn" title="Go to top"><i class="fa-solid fa-arrow-up topbtn"></i></button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function(){
            $('.tintuc-top-banner').slick({
  autoplay: true,
  autoplaySpeed: 3000,
  infinite: true,
  fade: true,
  cssEase: 'linear',
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
});
        });
</script>

</body>

</html>