
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <a href="trang_chu.php" class="logo"> <i class="fas fa-lightbulb"></i> Easymath </a>
    <div id="menu-btn" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
            <li><a href="trang_chu.php">Trang chủ</a></li>
            <li><a href="">Khóa học</a>
                <ul>
                    <li><a href="khoa_hoc_toan_10.php">Toán 10</a></li>
                    <li><a href="khoa_hoc_toan_11.php">Toán 11</a></li>
                    <li><a href="khoa_hoc_toan_12.php">Toán 12</a></li>
                </ul>
            </li>
            <li><a href="trang_gop_y.php">Góp ý</a></li>
            <li><a href="">Tài khoản</a>
                <ul>
                    <li> <?php @include 'config.php';

            

                     if($user_id ==''){ ?>
                        <a href="dang_nhap.php">Đăng nhập</a>
                    <?php ;} else {?>
                    <a href="dang_xuat.php">Đăng xuất</a>
                    <?php ;} ?>
                    </li>
                    <li><a href="dang_ky.php">Đăng ký</a></li>
                </ul>
            </li>
            
        </ul>
    </nav>
    <div class="icons">
      <div id="account-btn"">
         <?php if($user_id!=''){ ?>
                        <a href="trang_ca_nhan.php"><i class="fas fa-user"></i> </a>
                    <?php ;}  ?>     
   </div>
</header>
<script src="js/script.js"></script>
</body>
</html>