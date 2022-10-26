<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/na.css">

</head>
<body>
   <?php @include 'header.php'; ?>
   <section class="home">

   <div class="swiper home-slider">
      
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

   <h1 class="heading">Khóa học phổ biến</h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper" >

         <div class="swiper-slide slide" style=" width:33%; height:500px">
            <div class="image" >
               <img src="img/khoahoc10.png" alt="">
               <h3>Khóa học lớp 10</h3>
            </div>
            <div class="content">
               <h3>Khóa học lớp 10</h3>
               <p>Với những bài giảng siêu bổ ích</p>
               <a href="khoa_hoc_lop_10" class="btn">Chi tiết</a>
            </div>
         </div>

         <div class="swiper-slide slide" style=" width: 33%; height:500px">
            <div class="image" >
               <img src="img/khoahoc11.png" alt="">
               <h3>Khóa học lớp 11</h3>
            </div>
            <div class="content">
               <h3>Khóa học lớp 11</h3>
               <p>Nhanh chóng - Hiệu quả - siêu dễ hiểu</p>
               <a href="khoa_hoc_lop_11" class="btn">Chi tiết</a>
            </div>
         </div>

         <div class="swiper-slide slide" style=" width: 33%; height:500px">
            <div class="image">
               <img src="img/khoahoc12.png" alt="">
               <h3>Khóa học lớp 12</h3>
            </div>
            <div class="content">
               <h3>Khóa học lớp 12</h3>
               <p>Các bài giảng được chọn lọc kỹ lưỡng</p>
               <a href="khoa_hoc_lop_12" class="btn">Chi tiết</a>
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
