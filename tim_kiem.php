<!DOCTYPE html>
<html lang="zxx">
<?php
    require("header.php");
;?>
<body id="tin_tuc" >
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
<section class="heading-link">
   <h3>Khóa học Toán </h3>
   <p><form class="search-form" enctype="application/x-www-form-urlencoded"  method="get" action="tim_kiem.php" name="frm_search">           
                <input id="search-quick" type="text"   name="tk" placeholder="Tìm kiếm" autocomplete="off" minlength="1" style="">
                <button class="submit"><i class="fa fa-search"></i></button></p>

</section>

<section class="courses">
    <h2 class="bheading"> Thông tin khóa học </h2>
  
   <br>
   
   <h2 class="bheading"> Giáo viên </h2>
  
   <br>

   <h2 class="bheading"> Chương trình </h2>

   
<?php 
      // Kết nối đến CSDL
      require('config.php');

;?>

     <?php 
     $tk=$_GET['tk'];
     $sql1="SELECT * FROM `chi_tiet_chuong_trinh` WHERE chi_tiet_ten_bai like'%$tk%'";

     $chuong_trinh=mysqli_query($con,$sql1);
     while ($chuong=mysqli_fetch_array($chuong_trinh))
     {  ;?>
   
   <p class="pcourses" style="font-weight:bold; text-transform: uppercase;"> <?php echo $chuong["ct_chuong"];?> </p> 
    <?php $sql="SELECT * FROM `chi_tiet_chuong_trinh` WHERE ct_chuong ='".$chuong["ct_chuong"]."'";

      $chi_tiet=mysqli_query($con,$sql);
     while ($row=mysqli_fetch_array($chi_tiet)) 
         {
         ?>   
   <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">

            <h2 class="accordion-header" id="flush-heading<?php echo $row["chi_tiet_id"];?>"> 
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $row["chi_tiet_id"];?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $row["chi_tiet_id"];?>">
                <p class="pcourses" style="text-transform: none;"> <?php echo $row["chi_tiet_ten_bai"];?> </p></button></h2>
              <div id="flush-collapse<?php echo $row["chi_tiet_id"];?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $row["chi_tiet_id"];?>" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
               <ul>
                 <li style="font-size: 1.5rem;">Video bài giảng</li>

                 <li style="font-size: 1.5rem;">Đề ôn tập</li>
                 <li style="font-size: 1.5rem;">Đáp án</li>
                 <li style="font-size: 1.5rem; list-style-type: none;"><a href="luu_bai_giang.php">Lưu bài giảng </a> </li>
               </ul>
              </div>
             </div>
           </div>
       <?php } ;?> <br>
   <?php } ?> 
  
    </div>
</section>

 


    <!-- Footer Section Begin -->
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class="fas fa-lightbulb"></i> educa </h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, voluptatem.</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html" class="link">home</a>
         <a href="about.html" class="link">about</a>
         <a href="courses.html" class="link">courses</a>
         <a href="contact.html" class="link">contact</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>

      <div class="box">
         <h3>newsletter</h3>
         <p>subscribe for latest upadates</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>
</form>
</p>
</section>
</body>
</html>







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>