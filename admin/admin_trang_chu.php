<?php
@include 'config.php';
session_start();
if(isset($_SESSION['user_id'])=='')
{
    $user_id ='';
} else {
    $user_id = $_SESSION['user_id'];
}
 


if(isset($_POST['add'])) {
   $th_id = $_POST['txtkhoahoc'];
   $tk_id = $_POST['txtid'];
    $dk="INSERT INTO `tbl_dang_ky_khoa_hoc` (`dk_id`, `th_id`, `tk_id`, `dk_created`) VALUES (NULL, '".$th_id."','".$tk_id."', current_timestamp()) 
    ";
    //echo $sql; exit();

    // Thực hiện thêm mới dữ liệu
    mysqli_query($con, $dk);
     $message[] = 'Đăng ký thành công';
}

if(isset($_POST['delete'])) {
   $th_id = $_POST['txtkhoahoc'];
   $tk_id = $_POST['txtid'];
    $dk="DELETE FROM `tbl_dang_ky_khoa_hoc` WHERE tk_id='$tk_id' AND th_id ='$th_id'
    ";


    // Thực hiện thêm mới dữ liệu
    mysqli_query($con, $dk);
     $message[] = 'Hủy đăng ký thành công';
}

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>QUẢN LÝ</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom admin css file link  -->
     <link rel="stylesheet" type="text/css" href="../css/admin_style2.css">
</head>
<body>
   
<?php  
@include 'admin_header.php'; 
require('../config.php'); ?>

<section class="quanly">

   <h1 class="title">QUẢN LÝ</h1>

   <div class="box-container">
   <div class="box">
         <?php
            $select_so_luong_khoa_hoc = mysqli_query($con, "SELECT * FROM `tbl_tong_hop_khoa_hoc`") /*or die('query failed')*/;
            $so_luong_khoa_hoc = mysqli_num_rows($select_so_luong_khoa_hoc);
         ?>
         <h3><?php echo $so_luong_khoa_hoc; ?></h3>
         <p>Số lượng khóa học</p>
      </div>
  <div class="box">
         <?php
             $select_nguoi_dung = mysqli_query($con, "SELECT * FROM `tbl_tai_khoan` WHERE tk_loai_tai_khoan='user'") /*or die('query failed')*/;
            $so_nguoi_dang_ki = mysqli_num_rows($select_nguoi_dung);
    ?>
         <h3><?php echo $so_nguoi_dang_ki ?></h3>
         <p>Số người đăng ký</p>
   </div>
   <div class="box">
         <?php
            $select_admin = mysqli_query($con, "SELECT * FROM `tbl_tai_khoan` WHERE tk_loai_tai_khoan = 'admin'") /*or die('query failed')*/;
            $so_admin = mysqli_num_rows($select_admin);
         ?>
         <h3><?php echo $so_admin; ?></h3>
         <p>Số lượng admin</p>
      </div>
   <div class="box">
         <?php
            $select_gop_y = mysqli_query($con, "SELECT * FROM `tbl_gop_y`") /*or die('query failed')*/;
            $so_gop_y = mysqli_num_rows($select_gop_y);
         ?>
         <h3><?php echo $so_gop_y; ?></h3>
         <p>Góp ý mới</p>
      </div>

   </div>
<script src="js/admin_script.js"></script>
</section>
</body>
</html>