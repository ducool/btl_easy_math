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


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Easymath - Toán 11</title>

   <!-- font awesome cdn link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css_dn.css">


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
<!-- header section starts  -->
<?php require 'header.php'; ?>
<!-- header section ends -->



<section class="heading-link">
   <h3>Khóa học Toán lớp 11</h3>
   <form action="" method="POST">
   <?php  
   if($user_id!='') 
   {
      $sql2="SELECT * FROM `tbl_dang_ky_khoa_hoc` WHERE tk_id = '$user_id' AND th_id = 'LOP11'";
      $khoa=mysqli_query($con,$sql2);
      $data="";
      if ($kh=mysqli_fetch_array($khoa))
                {$data = $kh['tk_id']; }

      if($data!='')
      { ?>
        
    <input type="hidden" name="txtkhoahoc" value="LOP11">
    <input type="hidden" name="txtid" value="<?php echo $user_id ?>">
   <input type="submit" value=" Hủy đăng ký" name="delete" style="border: 1px solid; font-size: 2rem;" class="btn"> 
   <?php ;} else { ?>
    <input type="hidden" name="txtkhoahoc" value="LOP11">
    <input type="hidden" name="txtid" value="<?php echo $user_id ?>">
    <input type="submit" value="Đăng ký" name="add" style="border: 1px solid; font-size: 2rem;" class="btn"> 
    <?php ;} 
     } else {
        $data=""; ?>  <p class="pcourses">Bạn cần đăng nhập để đăng ký khóa học</p> 
        <?php ;} ?>
      </form>
</section>

<section class="courses">
   <h2 class="bheading"> Thông tin khóa học </h2>
   <?php 
   $sql3= "SELECT * FROM `tbl_tong_hop_khoa_hoc` WHERE th_id LIKE'LOP11'";
   $thongtin=mysqli_query($con,$sql3);
   while($tt=mysqli_fetch_array($thongtin))
   { ?>
      <p class="pcourses"><?php echo $tt["th_thong_tin"];?></p>
  <?php } ?>
   <br>
   
   <h2 class="bheading"> Giáo viên </h2>
   <?php 
   $sql4= "SELECT * FROM `tbl_giao_vien` WHERE th_id LIKE'LOP11'";
   $giaovien=mysqli_query($con,$sql4);
   while($tt=mysqli_fetch_array($giaovien))
   { ?>
      <p class="pcourses"> <?php echo $tt["gv_ho_ten"];?> <br>  <?php echo $tt["gv_thong_tin"];?></p>
  <?php } ?>
   <br>

   <h2 class="bheading"> Chương trình </h2>
<?php 
      // Kết nối đến CSDL
      require('config.php');

;?>

     <?php 
     $sql1="SELECT * FROM `tbl_chuong_trinh` WHERE th_id like 'LOP11'";
     $chuong_trinh=mysqli_query($con,$sql1);
     while ($chuong=mysqli_fetch_array($chuong_trinh))
     {  ;?>
   
   <p class="pcourses" style="font-weight:bold; text-transform: uppercase;"> <?php echo $chuong["ct_ten_chuong"];?> </p> 
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
                <?php if($data==''){ ?>
                 <li style="font-size: 1.5rem;">Video bài giảng</li>
                 <li style="font-size: 1.5rem;">Đề ôn tập</li>
                 <li style="font-size: 1.5rem;">Đáp án</li>
            <?php ;} else {?>
                <li style="font-size: 1.5rem;"><a href=" <?php echo $row["chi_tiet_video_bai"];?>" target="_blank">Video bài giảng</a></li>
                 <li style="font-size: 1.5rem;"><a href=" <?php echo $row["chi_tiet_bai_tap"];?>" target="_blank">Đề ôn tập</a></li>
                 <li style="font-size: 1.5rem;"><a href=" <?php echo $row["chi_tiet_dap_an"];?>" target="_blank">Đáp án</a></li>
                 
            <?php ;} ?>
               </ul>
              </div>
             </div>
           </div>
       <?php } ;?> <br>
   <?php } ?> 
  
    </div>
</section>









<!-- footer section starts  -->





<?php @include 'footer.php'; ?>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>