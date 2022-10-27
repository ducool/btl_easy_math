
				   <?php
					$id=$_GET["id"];

					// Kết nối đến CSDL
					require('../config.php');
					
					// Truy vấn đến bảng dữ liệu
					$sql="DELETE FROM chi_tiet_chuong_trinh WHERE chi_tiet_id=".$id;

					// Thực hiện xoá dữ liệu
					mysqli_query($con, $sql);?>
					

?>
<script type="text/javascript">
	window.alert("Xóa dữ liệu thành công!");
   window.location.href = "../admin/admin_noi_dung_12.php";
</script>