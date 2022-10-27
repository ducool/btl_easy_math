<?php



if(isset($_GET['delete'])){
   $delete_tk_id = $_GET['delete'];
   mysqli_query($con, "DELETE FROM `tbl_tai_khoan` WHERE tk_id = '$delete_tk_id'") /*or die('query failed')*/;
   header('location:admin_quan_ly_tai_khoan.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quản lý</title>

   <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom admin css file link  -->
     <link rel="stylesheet" type="text/css" href="../css/admin_style2.css">

</head>
<body>
   
<?php @include 'admin_header.php';
require('../config.php'); ?>

<section class="qltaikhoan">

   <h1 class="title">Quản lý tài khoản</h1>

   <div class="box-container">
      <?php
         $select_nguoi_dung = mysqli_query($con, "SELECT * FROM `tbl_tai_khoan`") /*or die('query failed')*/;
         if(mysqli_num_rows($select_nguoi_dung) > 0){
            while($fetch_nguoi_dung = mysqli_fetch_assoc($select_nguoi_dung)){
      ?>
      <div class="box">
         <p>Id người dùng : <span><?php echo $fetch_nguoi_dung['tk_id']; ?></span></p>
         <p>Tên người dùng : <span><?php echo $fetch_nguoi_dung['tk_ten_tai_khoan']; ?></span></p>
         <p>Email : <span><?php echo $fetch_nguoi_dung['tk_email']; ?></span></p>
         <p>Loại tài khoản : <span style="color:<?php if($fetch_nguoi_dung['tk_loai_tai_khoan'] == 'admin'){ echo 'var(--orange)'; }; ?>"><?php echo $fetch_nguoi_dung['tk_loai_tai_khoan']; ?></span></p>
         <a href="admin_quan_ly_tai_khoan.php?delete=<?php echo $fetch_nguoi_dung['tk_id']; ?>" onclick="return confirm('Bạn muốn xóa người dung này?');" class="delete-btn">Delete</a>
      </div>
      <?php
         }
      }
      ?>
   </div>

</section>
<script src="js/admin_script.js"></script>

</body>
</html>