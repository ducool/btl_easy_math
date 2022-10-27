<?php
@include 'config.php';
session_start();
if(isset($_SESSION['user_id'])=='')
{
    $user_id ='';
} else {
    $user_id = $_SESSION['user_id'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Easymath - Trang chủ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">
    <a href="trang_chu.php" class="logo"> <i class="fas fa-lightbulb"></i> Easymath </a>
    <div id="menu-btn" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
            <li><a href="#gioithieu">Trang chủ</a></li>
            <li><a href="#khoahoc">Khóa học</a>
                <ul>
                    <li><a href="khoa_hoc_toan_10.php">Toán 10</a></li>
                    <li><a href="khoa_hoc_toan_11.php">Toán 11</a></li>
                    <li><a href="khoa_hoc_toan_12.php">Toán 12</a></li>
                </ul>
            </li>
            <li><a href="trang_gop_y.php">Góp ý</a></li>
            <li><a href="#">Tài khoản</a>
                <ul>
                    <li> <?php @include 'config.php';

            

                     if($user_id ==''){ ?>
                        <a href="dang_nhap.php">Đăng nhập</a>
                    <?php ;} else {?>
                    <a href="dang_xuat.php">Đăng xuất</a>
                    <?php ;} ?>
                    </li>
                    <li><a href="dang_ky.php">Đăng ký</a></li>
                </ul>
            </li>
            
        </ul>
    </nav>
    <div class="icons">
      <div id="account-btn"">
         <?php if($user_id!=''){ ?>
                        <a href="trang_ca_nhan.php"><i class="fas fa-user"></i> </a>
                    <?php ;}  ?>     
   </div>
</header>

   <section class="home">

   <div id ="gioithieu" class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(img/gioithieu.png) no-repeat;">
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 id = "khoahoc" class="heading">Khóa học của chúng tôi</h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper" >

         <div class="swiper-slide slide" style=" width:33%; height:500px">
            <div class="image" >
               <img src="img/khoahoc10.png" alt="">
               <h3>Khóa học Toán 10</h3>
            </div>
            <div class="content">
               <h3>Khóa học Toán 10</h3>
               <p>Học tập mọi lúc mọi nơi</p>
               <a href="khoa_hoc_toan_10.php" class="btn">Chi tiết</a>
            </div>
         </div>

         <div class="swiper-slide slide" style=" width: 33%; height:500px">
            <div class="image" >
               <img src="img/khoahoc11.png" alt="">
               <h3>Khóa học Toán 11</h3>
            </div>
            <div class="content">
               <h3>Khóa học Toán 11</h3>
               <p>Giảng viên tận tâm, bài học dễ hiểu</p>
               <a href="khoa_hoc_toan_11.php" class="btn">Chi tiết</a>
            </div>
         </div>

         <div class="swiper-slide slide" style=" width: 33%; height:500px">
            <div class="image">
               <img src="img/khoahoc12.png" alt="">
               <h3>Khóa học Toán 12</h3>
            </div>
            <div class="content">
               <h3>Khóa học Toán 12</h3>
               <p>Miễn phí 100%</p>
               <a href="khoa_hoc_toan_12.php" class="btn">Chi tiết</a>
            </div>
         </div>

      </div>

   </div>

</section>

<?php @include 'footer.php'; ?>

 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>