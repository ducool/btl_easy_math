<?php require 'header.php';
@include 'config.php';

//session_start();

$user_id = $_SESSION['user_id'];

 ?>
<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
         <?php
            $sql="SELECT * FROM `tbl_tai_khoan` where tk_id='$user_id'";
            $tai_khoan=mysqli_query($con,$sql);
            $tk=mysqli_fetch_array($tai_khoan);
         ?>
         <?php 
         if($tk['tk_anh_dai_dien']!="")
         { ?>
            <img src="upload/<?= $tk['tk_anh_dai_dien']; ?>" alt="">
         <?php ;} 
         else { ?> 
            <img src="upload/heading-bg.jpg" alt="">
         <?php ;} ?>
         <h3><?= $tk['tk_ten_tai_khoan']; ?></h3>
         <span>Học sinh</span>
         <a href="trang_ca_nhan.php" class="btn">view profile</a>
         <?php
           /* }else{
         ?>
         <h3>please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="dang_nhap.php" class="option-btn">login</a>
            <a href="dang_ky.php" class="option-btn">register</a>
         </div>
         <?php
            } */
         ?> 
      </div>

   <nav class="navbar">
      <a href="#"><i class="fas fa-user"></i><span>Trang cá nhân</span></a>
      <a href="#"><i class="fas fa-book"></i><span>Khóa học đã đăng ký</span></a>
      
      
   </nav>

</div>