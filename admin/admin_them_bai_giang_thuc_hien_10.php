<?php 
$id = $_POST['txtID'];
$chuong = $_POST['txtChuong'];
$ten_bai= $_POST['txtTenBai'];
$bai_tap= $_POST['txtBTVN'];
$giai = $_POST['txtGiaiBTVN'];
$ghi_chu = $_POST['txtGhiChu'];
$video = $_POST['txtVideo'];
session_start();
$admin_id = $_SESSION['admin_id'];

require('../config.php');
$sql= "INSERT INTO `chi_tiet_chuong_trinh` (`chi_tiet_id`, `ct_chuong`, `chi_tiet_ten_bai`, `chi_tiet_video_bai`, `chi_tiet_bai_tap`, `chi_tiet_dap_an`, `chi_tiet_ghi_chu`, `chi_tiet_created`, `tk_id`) VALUES (NULL, '".$chuong."', '".$ten_bai."', '".$video."', '".$bai_tap."', '".$giai."', '".$ghi_chu."', current_timestamp(), '".$admin_id."');";


mysqli_query($con, $sql);
?>
<script type="text/javascript">
    window.alert("Cập nhật bài giảng thành công!");
   window.location.href = "../admin/admin_noi_dung_10.php";
</script>
 ?>