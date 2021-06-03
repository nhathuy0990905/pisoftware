<?php
	require_once "connect.php";
	session_start();
	if(!isset($_SESSION['username']))
		header('Location: login.php');
?>

<head>
	<style>
		tr#data:hover{
			background-color: #c7d4dd;
		}
    .content{
      width: 87%;
      float: right;
    }
    .bg-dark {
      width: 100%;
      display: inline-block;
    }
    .menu{
      margin-top: 30px;
      margin-bottom: 20px;
      width: 13%;
      float: left;
    }
    ul{
      list-style: none;
      font-family: Verdana;
    }
	</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
  <link rel="shorcut icon" href="../image/login.png">
  <title>PI SOFTWARE</title>
</head>

<?php

	// Phân trang
	if (isset($_GET['page']))							// Kiểm tra sự tồn tại của biến page ở url (lấy dữ liệu từ url)
		$page = $_GET['page'];							// Lấy giá trị biến page ở url 
	else
		$page = 1;										// Nếu không tồn tại biến page thì mặc định ở trang 1		
	
	$row = 3;											// 1 phân trang có 3 hàng dữ liệu
	$from = ($page - 1)*$row;							// Tổng số phân trang = ( Trang - 1 ) * $row
	$sql = "SELECT * FROM data LIMIT $from,$row";
	$query = mysqli_query($connect,$sql);				// Thực hiện câu lệnh truy vấn $sql với kết nối database $connect
  //$result = mysql_fetch_assoc($query);
?>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="../image/login.png" width="70px" style="padding-left: 15px" class="d-inline-block align-top" alt="">
  </a>
  <a class="navbar-brand" href="account.php" title="Xem thông tin tài khoản">
    Welcome <b style="color:red;"><?php echo $_SESSION['username'] ?></b>
  </a>
</nav>

<div class="menu">
  <ul class="">
    <li></li>
    <li>
      <i class="fas fa-home">
        <a href="">Trang Chủ</a>  
      </i>
    </li>
    <li>
      <i class="fas fa-plus-circle">
        <a href="">Thêm</a>  
      </i>
    </li>
    <li>
      <i class="fas fa-edit">
        <a href="">Sửa</a> 
      </i>
    </li>
    <li>
      <i class="fas fa-trash-alt">
        <a href="">Xoá</a>
      </i>
    </li>
    <li>
      <i class="fas fa-sign-out-alt">
        <a href="">Đăng xuất</a>
      </i>
    </li>
  </ul>  
</div>

<div class="content">
  <div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px">
      <div class="card">
        <div class="card-header">
          <b style="font-size: 20px">Thông tin tài khoản</b> 
        </div>
        <div class="card-body">
          <img src="../image/nhathuy.jpg" width="20%" style="text-align: center">
          <table class="table">
            <thead class="thead-danger">
              <tr style="background-color: #ffe6e6">  
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
                <th>Address</th>
                <th>Phone</th>
              </tr>
            </thead>
            <tbody>
              <tr id="data">
                <td><b>nhathuy</b></td>
                <td><b>nhathuy</b></td>
                <td>Nguyễn Văn Nhật Huy</td>
                <td>Huế</td>
                <td>0832890480</td>
              </tr>
            </tbody>
          </table>
          <div style="text-align: center">
            <a href="main.php?page_layout=main" class="btn btn-success">
                  Quay lại trang chủ
            </a>
          </div>
        </div>
        <div class="card-footer" style="text-align: center">
          <b>© PI SOFTWARE COMPANY 2021</b>
        </div>
      </div>
  </div>
</div>

<br />
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/DarthVader.HuyNguyen/" role="button">
          <i class="fab fa-facebook"></i>
        </a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-twitter"></i>
        </a>

      <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-google"></i>
        </a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="fab fa-instagram"></i>
      </a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="fab fa-linkedin-in"></i>
      </a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="fab fa-github"></i>
      </a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Đăng ký Email</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Đăng ký
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <b>
        Hệ thống quản lý dữ liệu Pi Software
      </b>
    </section>
    <!-- Section: Text -->

  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a href="http://wearepisoftware.com/" style="color: red">Pi Software</a>
  </div>
  <!-- Copyright -->