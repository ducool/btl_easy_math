<?php
@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:dang_nhap.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Easymath - Trang cá nhân</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_user.css">

</head>
<body>

<?php include 'user_header.php'; ?>


<section class="courses">
  <h1 class="userheading">Khóa học đã đăng ký</h1>
<div class="box-container">

      <?php
         $sql= "SELECT * FROM `tbl_dang_ky_khoa_hoc` where tk_id='$user_id' ORDER BY dk_created DESC";
         $khoa_hoc=mysqli_query($con,$sql);
         
            while($kh=mysqli_fetch_array($khoa_hoc))
            {
               $khoa = $kh['th_id'];
      ?>
      <div class="box">
         <div class="tutor">
            <div>
               <h3>Thời gian đăng ký: </h3>
               <span> <?php echo $kh["dk_created"]; ?> </span>
            </div>
         </div>
         <?php if($khoa=="LOP12") { ?>
            <h3 class="title" style="text-align: center;">Khóa học Toán 12 </h3>
         <a href="khoa_hoc_toan_12.php" class="btn">Vào học</a>
        <?php ;} ?>
          <?php if($khoa=="LOP11") { ?>
            <h3 class="title" style="text-align: center;">Khóa học Toán 11 </h3>
         <a href="khoa_hoc_toan_11.php" class="btn">Vào học</a>
        <?php ;} ?>
          <?php if($khoa=="LOP10") { ?>
            <h3 class="title" style="text-align: center;">Khóa học Toán 10 </h3>
         <a href="khoa_hoc_toan_10.php" class="btn">Vào học</a>
        <?php ;} ?>
      </div>
      <?php
         }
      ?>

   </div>

  <br>

  <p style="font-size: 1.7rem; border: .1rem solid; text-align: center; margin-top: 12rem ; text-transform: none;">"Non sông Việt Nam có trở nên vẻ vang hay không, dân tộc Việt Nam có được vẻ vang sánh vai<br>các cường quốc năm châu được hay không, chính là nhờ một phần lớn ở công học tập của các cháu" <br>_Chủ tịch Hồ Chí Minh_</p>

</section>
<!-- custom js file link  -->
<script src="js/script_user.js"></script>
   
</body>
</html>