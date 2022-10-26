
<?php

@include 'config.php';

session_start();

if(isset($_POST['send'])){

    $email =  $_POST['gy_email'];
    $sdt = $_POST['gy_dien_thoai'];
    $tieude = $_POST['gy_tieu_de'];
    $noidung = $_POST['gy_noi_dung'];

    $sql = mysqli_query($con, "SELECT * FROM tbl_gop_y WHERE gy_email = '$email' AND gy_dien_thoai = '$sdt' AND  gy_tieu_de= '$tieude' AND gy_noi_dung = '$noidung'");

    if(mysqli_num_rows($sql) > 0){
        $message[] = 'Nội dung này đã được ghi nhận!';
    }else{
        mysqli_query($con, "INSERT INTO `tbl_gop_y` (`gy_email`, `gy_dien_thoai`, `gy_tieu_de`, `gy_noi_dung`) VALUES ( '".$email."', '".$sdt."', '".$tieude."', '".$noidung."')");
        $message[] = 'Góp ý được gửi thành công!';
             header('location:trang_chu.php');
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Góp ý</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php @include'header.php'?>
<section class="heading-link">
   <h3>Góp ý - Phản hồi</h3>
</section>
 <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<section class="contact">
    <div class="row">

      <div class="img">
         <img src="img/contact-img.png" alt="">
      </div>

    <form action="" method="POST" style="border: 1px solid;">
        <h3>Góp ý cho chúng tôi tại đây</h3>
        <input style="border: 1px solid;text-transform: lowercase;" type="email" name="gy_email" placeholder="Nhập email của bạn" class="box" required> 
        <input style="border: 1px solid;text-transform: lowercase;" type="sdt" name="gy_dien_thoai" placeholder="Nhập số điện thoại" class="box" required>
        <input style="border: 1px solid; text-transform: lowercase;" type="tieude" name="gy_tieu_de" placeholder="Nhập tiêu đề" class="box" required>
        <textarea style="border: 1px solid; text-transform: lowercase; "name="gy_noi_dung" class="box" placeholder="Nhập nội dung" required cols="30" rows="10"></textarea>
        <input type="submit" value="Gửi" name="send" class="btn">
    </form>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>


</body>