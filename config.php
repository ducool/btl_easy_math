<?php
		// Thông số kết nối đến máy chủ dữ liệu
		$host="localhost";
		$username="root";
		$password="";
		$dbname="db_nhom5";

		// Kết nối và kiểm tra xem có kết nối thành công đến máy chủ CSDL hay không?
		$con=mysqli_connect($host, $username, $password, $dbname);
		if (!$con) {
			echo "Kết nối đến CSDL thất bại";
		}
;?>