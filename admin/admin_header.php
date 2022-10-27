<header class="header">
<link rel="stylesheet" type="text/css" href="../css/admin_style2.css">
   <div class="flex">

      <a href="admin_trang_chu.php" class="logo">Easy<span>Math</span></a>
      <nav class="navbar">
            <ul>
                <li><a href="#">Nội dung khóa học +</a>
                    <ul>
                        <li><a href="admin_noi_dung_10.php">Khóa học lớp 10</a></li>
                        <li><a href="admin_noi_dung_11.php">Khóa học lớp 11</a></li>
                        <li><a href="admin_noi_dung_12.php">Khóa học lớp 12</a></li>
                    </ul>
                </li>
                <li><a href="admin_quan_ly_tai_khoan.php">Quản lý tài khoản</a></li>
                <li><a href="admin_gop_y.php">Góp ý</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Tên tài khoản : <span><?php echo $_SESSION['tk_ten_tai_khoan']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['tk_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Đăng xuất</a>
      </div>

   </div>


</header>