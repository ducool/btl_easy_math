<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Easy-Math</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
  <script type="text/javascript">
  function check_du_lieu() {
  
  var chuong = document.getElementById("txtTenChuong").value;                          

    if (chuong=="") {
    window.alert("Bạn chưa điền tên chương");
      return false;
         }


  return true;
      }
     </script>
</head>
<style >
  .scrollbar {
    float: left;
    height: 300px;
    margin-bottom: 25px;
    width: 15px;
       overflow-y: scroll;
}
.force-overflow {
    min-height: 450px;
}

</style>
<body id="page-top">
  <?php 
    // Kết nối đến CSDL
    require('../config.php');



  ;?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark scrollbar " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center ">
         <a href="admin_trang_chu.php" style="color: white">&#8249;</a>
        <div class="sidebar-brand-text mx-3">Easy-Math</div>
      </div>
         
   <hr class="sidebar-divider">
    <?php 
     $sql1="SELECT * FROM `tbl_chuong_trinh` WHERE th_id like 'LOP11'";
     $chuong_trinh=mysqli_query($con,$sql1);
     while ($chuong=mysqli_fetch_array($chuong_trinh))
     {  ;?>
      <li class="nav-item">
   <div class="nav-link collapsed" data-toggle="collapse" data-target="#collapsebai<?php echo $chuong["ct_chuong"]?>" aria-expanded="true" aria-controls="collapsebai<?php echo $chuong["ct_chuong"]; ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span style="font-weight: bolder;"><?php echo $chuong["ct_ten_chuong"];?></span>
        </div>
        <div id="collapsebai<?php echo $chuong["ct_chuong"];  ?>" class="collapse" aria-labelledby="headingbai<?php echo $chuong["ct_chuong"];  ?>" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="admin_cap_nhat_chuong_11.php?id=<?php echo $chuong["ct_chuong"];?>">Cập nhật chương</a>
            <a class="collapse-item" onclick="return confirm('Bạn muốn xóa chương?');" href="admin_xoa_chuong_11.php?id=<?php echo $chuong["ct_chuong"];?>">Xóa chương</a>
            <a class="collapse-item" href="admin_them_bai_giang_11.php?id=<?php echo $chuong["ct_chuong"];?>">Thêm bài giảng</a>
          </div>
        </li>

    <?php $sql="SELECT * FROM `chi_tiet_chuong_trinh` WHERE ct_chuong ='".$chuong["ct_chuong"]."'";

      $chi_tiet=mysqli_query($con,$sql);
      $i=100;
     while ($row=mysqli_fetch_array($chi_tiet)) 
         {
          $i++;
         ?>   
    <li class="nav-item ">
        <div class="nav-link collapsed" data-toggle="collapse" data-target="#collapsechuong<?php echo $row["chi_tiet_id"];?>" aria-expanded="true" aria-controls="collapsechuong<?php echo $row["chi_tiet_ten_bai"] ; ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span><?php echo $row["chi_tiet_ten_bai"];  ?></span>
        </div>
        <div id="collapsechuong<?php echo $row["chi_tiet_id"];  ?>" class="collapse" aria-labelledby="headingchuong<?php echo $row["chi_tiet_id"];  ?>" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="admin_noi_dung_cap_nhat_11.php?id=<?php echo $row["chi_tiet_id"];?>">Cập nhật</a>
            <a class="collapse-item" href="admin_xoa_bai_giang_11.php?id=<?php echo $row["chi_tiet_id"];?>">Xóa</a>
          </div>
        </div>
      </li>
       <?php } ;?>    <hr class="sidebar-divider">
   <?php } ?> 
      <a href="../admin/admin_them_chuong_11.php">
      <p style="text-align: center;"><button type="submit" style="  height: 30px; width: 200px; border: 2px solid #fff; background: #0eb582; color: #fff;">Thêm chương</button></p></a>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4  shadow">
          <div style="text-align: center; font-weight: bolder;color: black;">NỘI DUNG KHÓA HỌC </div>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">THÔNG TIN BÀI GIẢNG</h6>
                </div>
                <div class="card-body">
            
                  <!-- Circle Buttons (Default) -->
                  <div class="mb-2">
                  </div>            
                  
                   <?php 
                      $id=$_GET["id"];
                        $sql2="SELECT * FROM tbl_chuong_trinh  WHERE ct_chuong=" .$id;

                        $bai_giang2=mysqli_query($con, $sql2);
                        $row2 = mysqli_fetch_array($bai_giang2);
                      
                       
                      
                      ;?>
                       <form action="../admin/admin_cap_nhat_chuong_thuc_hien_11.php"method="POST" enctype="multipart/form-data">
    
                        <label for="fname">Mã chương</label><br>
                       <p> <input type="text" id="chi_tiet_ma_chuong" name="txtIDChuong"  style="width:95%; height: 30px" value="<?php echo $row2["ct_chuong"];?>" disabled ></p>

                       <label for="fname">Tên chương</label><br>
                       <p> <input type="text" id="chi_tiet_ten_chuong" name="txtTenChuong" style="width:95%; height: 30px" value="<?php echo $row2["ct_ten_chuong"] ;?>"></p>
                                                 
                         <p style="text-align: center;"><input type="hidden" name="txtIDChuong" value="<?php echo $row2["ct_chuong"] ;?>"><button onsubmit="return check_du_lieu()" type="submit">Lưu</button></p>
                    </form> 
                 
                 
              </div>

             

            </div>

            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery.min.js"></script>
  <script src="../vendor/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/admin.js"></script>

</body>

</html>
