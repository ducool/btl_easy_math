<?php 

$id = $_POST['txtIDChuong'];
$chuong = $_POST['txtTenChuong'];


$sql= "UPDATE `tbl_chuong_trinh`
 SET  `ct_ten_chuong` ='".$chuong."', `th_id` = 'LOP10'
 WHERE `tbl_chuong_trinh`.`ct_chuong` = '".$id."';";

require('../config.php');
mysqli_query($con, $sql);

 ?>
 <script type="text/javascript">
    window.alert("Cập nhật chuong thành công!");
    window.location.href = "../admin/admin_noi_dung_10.php";
</script>