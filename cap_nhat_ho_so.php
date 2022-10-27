<?php
@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:dang_nhap.php');
}

if(isset($_POST['submit'])){
  $sql="SELECT * FROM `tbl_tai_khoan` WHERE tk_id='$user_id'";
  $tai_khoan=mysqli_query($con,$sql);
  $tk=mysqli_fetch_array($tai_khoan);
  $ten=$_POST['txttentaikhoan'];
  
  $dienthoai=$_POST['txtdienthoai'];
 

  if(!empty($ten)){
   $sqlten="UPDATE `tbl_tai_khoan` SET tk_ten_tai_khoan = '".$ten."' WHERE tk_id = '".$user_id."' ";
   mysqli_query($con,$sqlten);
   $message[] ='Đã cập nhật tên tài khoản';
   }
   $pathanh = basename($_FILES['txtanhdaidien']['name']);
   $target_dir = "./upload/";
   $target_file = $target_dir.$pathanh;
   $tai_anh=move_uploaded_file($_FILES['txtanhdaidien']['tmp_name'],$target_file);


   if(!empty($tai_anh)){
      $avatar=$_FILES['txtanhdaidien']['name'];
   $sqlanh="UPDATE `tbl_tai_khoan` SET tk_anh_dai_dien = '".$avatar."' WHERE tk_id = '".$user_id."' ";
   mysqli_query($con,$sqlanh);
   
   $message[] ='Đã cập nhật ảnh đại diện';
   }

   if(!empty($dienthoai)){
   $sqldt="UPDATE `tbl_tai_khoan` SET tk_dien_thoai = '".$dienthoai."' WHERE tk_id = '".$user_id."' ";
   mysqli_query($con,$sqldt);
   $message[] ='Đã cập nhật số điện thoại';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hồ sơ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_user.css">

</head>
<body>


<?php include 'user_header.php'; ?>

<section class="form-container" style="min-height: calc(100vh - 19rem);">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Cập nhật hồ sơ</h3>
      <div class="flex">
         <div class="col">
            <p>Tên tài khoản</p>
            <input type="text" name="txttentaikhoan" placeholder="<?php echo $tk["tk_ten_tai_khoan"]; ?>" maxlength="100" class="box">
            <p>Email</p>
            <input type="email" name="" placeholder="<?php echo $tk["tk_email"]; ?>" maxlength="100" class="box" disabled>
           
         </div>
         <div class="col">
               <p>Số điện thoại</p>
               <input type="text" name="txtdienthoai" placeholder="<?php echo $tk["tk_dien_thoai"]; ?>" maxlength="100" class="box">
                <p>Ảnh đại diện</p>
            <input type="file" name="txtanhdaidien" placeholder="<?php echo $tk["tk_anh_dai_dien"]; ?>" class="box"> 
               
               
         </div>
      </div>
      <input type="submit" name="submit" value="Lưu" class="btn">
   </form>

</section>

<!-- update profile section ends -->















<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>