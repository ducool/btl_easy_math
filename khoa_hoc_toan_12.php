<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php @include 'header.php'; ?>



<!-- header section ends -->

<section class="heading-link">
   <h3>Khóa học Toán lớp 12</h3>
   <p>Thông tin khóa học | Giáo viên | Chương trình</p>
</section>

<section class="courses">

   <h2 class="bheading"> Thông tin khóa học </h2>
   <p class="pcourses">chi tiết kh</p>
   <br>
   
   <h2 class="bheading"> Giáo viên </h2>
   <p class="pcourses">chi tiết </p>
   <br>

   <h2 class="bheading"> Chương trình </h2>
<?php 
      // Kết nối đến CSDL
      require('config.php');
      /* $sql="SELECT * FROM `chi_tiet_chuong_trinh` WHERE ct_chuong like 'L12%'";

      $chi_tiet=mysqli_query($con,$sql);

      while ($row=mysqli_fetch_array($chi_tiet))
      {
         echo $row["chi_tiet_ten_bai"]."<br>";
      }
      */
;?>

   <div class="accordion accordion-flush" id="accordionFlushExample">
     <?php 
     $sql="SELECT * FROM `chi_tiet_chuong_trinh` WHERE ct_chuong like 'L12%'";

      $chi_tiet=mysqli_query($con,$sql);
     $i=0; 
     while ($row=mysqli_fetch_array($chi_tiet)) 
      { if ($i==0) {
         ?>   
  <div class="accordion-item">

    <h2 class="accordion-header" id="flush-headingOne"> 
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <?php echo $row["chi_tiet_ten_bai"];?>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
<?php } else { ?>
  <br>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading<?php echo $row["chi_tiet_id"];?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $row["chi_tiet_id"];?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $row["chi_tiet_id"];?>">
        <?php echo $row["chi_tiet_ten_bai"];?>
      </button>
    </h2>
    <div id="flush-collapse<?php echo $row["chi_tiet_id"];?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $row["chi_tiet_id"];?>" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
<?php } $i++;} ?>
  
    </div>
   
</section>









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







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>