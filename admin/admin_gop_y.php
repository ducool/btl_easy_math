<?php



if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($con, "DELETE FROM `tbl_gop_y` WHERE gy_id = '$delete_id'");
   header('location:admin_gop_y.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>góp ý</title>

   <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom admin css file link  -->
     <link rel="stylesheet" type="text/css" href="../css/admin_style2.css">

</head>
<body>
   
<?php 
@include 'admin_header.php'; 
 require('../config.php'); ?>
<section class="gy">

   <h1 class="title">Góp ý</h1>

   <div class="box-container">
      <?php
       $select_gop_y = mysqli_query($con, "SELECT * FROM `tbl_gop_y`") /*or die('query failed')*/;
       if(mysqli_num_rows($select_gop_y) > 0){
          while($fetch_gop_y = mysqli_fetch_assoc($select_gop_y)){
      ?>
      <div class="box">
         <p>Id người dùng : <span><?php echo $fetch_gop_y['gy_id']; ?></span> </p>
         <p>Số điện thoại : <span><?php echo $fetch_gop_y['gy_dien_thoai']; ?></span> </p>
         <p>Phần góp ý : <span><?php echo $fetch_gop_y['gy_tieu_de']; ?></span> </p>
         <p>Email : <span><?php echo $fetch_gop_y['gy_email']; ?></span> </p>
         <p>Nội dung góp ý : <span><?php echo $fetch_gop_y['gy_noi_dung']; ?></span> </p>
         <a href="admin_gop_y.php?delete=<?php echo $fetch_gop_y['gy_id']; ?>" onclick="return confirm('Bạn muốn xóa góp ý này?');" class="delete-btn">delete</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">you have no messages!</p>';
      }
      ?>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>