<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $tk_ten_tai_khoan=$_POST['tk_ten_tai_khoan'];
   $tk_email=$_POST['tk_email'];
   $tk_mat_khau=$_POST['tk_mat_khau'];
   $ctk_mat_khau=$_POST['ctk_mat_khau'];
   $sql = mysqli_query($con, "SELECT * FROM tbl_tai_khoan WHERE tk_email = '$tk_email'") or die('query failed');

   if(mysqli_num_rows($sql) > 0){
      $message[] = 'Tài khoản đã tồn tại';
   }else{
      if($tk_mat_khau != $ctk_mat_khau){
         $message[] = 'Xác nhận mật khẩu không trùng nhau!';
      }else{
         mysqli_query($con, "INSERT INTO `tbl_tai_khoan`(`tk_ten_tai_khoan`, `tk_mat_khau`,`tk_email` ) VALUES ('".$tk_ten_tai_khoan."','".$tk_mat_khau."','".$tk_email."')");
         $message[] = 'Đăng ký thành công!';
         header('location:trang_chu.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng ký</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

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
   
<section class="form-container">

   <form action="" method="post"style="border: 1px solid;">
      <h3>Đăng ký</h3>
      <input style="border: 1px solid; text-transform: lowercase;"type="text" name="tk_ten_tai_khoan" class="box" placeholder="Nhập tên đăng nhập" required>
      <input style="border: 1px solid; text-transform: lowercase;" type="email" name="tk_email" class="box" placeholder="Nhập email" required>
      <input style="border: 1px solid; text-transform: lowercase;" type="password" name="tk_mat_khau" class="box" placeholder="Nhập mật khẩu" required>
      <input style="border: 1px solid; text-transform: lowercase;" type="password" name="ctk_mat_khau" class="box" placeholder="Nhập lại mật khẩu" required>
      <input style="border: 1px solid; "  type="submit" class="btn" name="submit" value="Đăng ký">
      <p style="font-size:15px">Bạn đã có tài khoản?<a href="dang_nhap.php"style="color: orange">Đăng nhập</a></p>
   </form>

</section>

</body>
</html>