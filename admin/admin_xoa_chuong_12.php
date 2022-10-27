
<?php
	$id=$_GET["id"];

	// Kết nối đến CSDL
	require('../config.php');

$sql="DELETE FROM chi_tiet_chuong_trinh WHERE ct_chuong=".$id;
$sql1="DELETE FROM tbl_chuong_trinh WHERE ct_chuong=".$id;


	// Thực hiện xoá dữ liệu
	mysqli_query($con, $sql);
		mysqli_query($con, $sql1);

	// Thực hiện thông báo cho mọi người biết các bạn xoá thành công
;?>
 <script type="text/javascript">
    window.alert("Xóa chương thành công!");
    window.location.href = "../admin/admin_noi_dung_12.php";
</script>