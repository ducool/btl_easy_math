<?php 


$ten_chuong = $_POST['txtTenChuong'];

require('../config.php');
$sql= "INSERT INTO `tbl_chuong_trinh` (`ct_chuong`, `ct_ten_chuong`, `th_id`) VALUES (NULL,
 '".$ten_chuong."', 'LOP12')";


mysqli_query($con, $sql);
?>
<script type="text/javascript">
    window.alert("Cập nhật chương thành công!");
    window.location.href = "../admin/admin_noi_dung_10.php";
</script>

 