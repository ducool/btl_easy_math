
<?php
$id=$_GET["id"];


require('../config.php');
					

$sql="DELETE FROM chi_tiet_chuong_trinh WHERE chi_tiet_id=".$id;

	
mysqli_query($con, $sql);?>
					

?>
<script type="text/javascript">
	window.alert("Xóa dữ liệu thành công!");
   window.location.href = "../admin/admin_noi_dung_11.php";
</script>