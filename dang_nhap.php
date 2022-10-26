
<?php

  @include 'config.php';
        session_start();

if(isset($_POST['submit'])){
   $tk_email=$_POST['tk_email'];
   $tk_mat_khau=$_POST['tk_mat_khau'];
    $sql= mysqli_query($con, "SELECT * FROM tbl_tai_khoan  WHERE tk_email = '$tk_email' AND tk_mat_khau= '$tk_mat_khau'") ;


    if(mysqli_num_rows($sql) > 0){
      
      $row = mysqli_fetch_assoc($sql);
      if($row['tk_loai_tai_khoan'] == 'admin'){
         $_SESSION['admin_email'] = $row['tk_email'];
         $_SESSION['admin_id'] = $row['tk_id'];
         header('location:admin_trang_chu.php');


      }elseif($row['tk_loai_tai_khoan'] == 'user'){

         $_SESSION['user_email'] = $row['tk_email'];
         $_SESSION['user_id'] = $row['tk_id'];
         header('location:trang_ca_nhan.php');

       }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng nhập</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css_dn.css">

</head>
<body>
<?php @include 'header.php'; ?>

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
   
   
<section class="form-container" >

   <form action="" method="post" style="border: 1px solid;">
      <h3>Đăng nhập</h3>
      <input style="border: 1px solid; text-transform: lowercase;" type="tk_email" name="tk_email" class="box" placeholder="Nhập email" required>
      <input style="border: 1px solid; text-transform: lowercase;" type="tk_mat_khau" name="tk_mat_khau" class="box" placeholder="Nhập mật khẩu" required>
      <input style="border: 1px solid;" type="submit" class="btn" name="submit" value="Đăng nhập">
      <p style="font-size:15px; text-transform: lowercase;">Bạn chưa có tài khoản? <a href="dang_ky.php" style="color: orange">Đăng ký</a></p>
   </form>
</section>
<?php @include 'footer.php'; ?>
</body>




</html>