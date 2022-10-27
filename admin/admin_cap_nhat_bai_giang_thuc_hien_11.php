<?php 

$id = $_POST['txtID'];
$chuong = $_POST['txtChuong'];
$ten_bai = $_POST['txtTenBai'];
$video = $_POST['txtVideo'];
$bai_tap = $_POST['txtBTVN'];
$giai= $_POST['txtGiaiBTVN'];
$ghi_chu=$_POST['txtGhiChu'];
//$id_tai_khoan = $_POST['txtIDTaiKhoan'];

$sql= "UPDATE `chi_tiet_chuong_trinh`
 SET `ct_chuong` = '".$chuong."', `chi_tiet_ten_bai` = '".$ten_bai."', `chi_tiet_video_bai` = '".$video."', `chi_tiet_bai_tap` = '".$bai_tap."', `chi_tiet_dap_an` = '".$giai."', `chi_tiet_ghi_chu` = '".$ghi_chu."' 
 WHERE `chi_tiet_chuong_trinh`.`chi_tiet_id` = '".$id."';";

require('../config.php');
mysqli_query($con, $sql);

 ?>
 <script type="text/javascript">
    window.alert("Cập nhật dữ liệu thành công!");
    window.location.href = "../admin/admin_noi_dung_11.php";
</script>
