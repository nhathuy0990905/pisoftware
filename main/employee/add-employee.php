<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    // Phân trang
	if (isset($_GET['page']))							// Kiểm tra sự tồn tại của biến page ở url (lấy dữ liệu từ url)
        $page = $_GET['page'];							// Lấy giá trị biến page ở url 
    else
        $page = 1;										// Nếu không tồn tại biến page thì mặc định ở trang 1		

    $row = 6;											// 1 phân trang có 3 hàng dữ liệu
    $from = ($page - 1)*$row;							// Tổng số phân trang = ( Trang - 1 ) * $row
    $sql = "SELECT * FROM employee LIMIT $from,$row";
    $query = mysqli_query($connect,$sql);				// Thực hiện câu lệnh truy vấn $sql với kết nối database $connect
?>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
    <link rel="shorcut icon" href="../../image/logo.png">
    <title>PI SOFTWARE</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
    <div class="data-left">
        <?php
            include '../../include/navbar.php';
        ?>
        <div class="data2">
            <?php
                include 'menu-left.php';
            ?>
            <div class="right">
                <form action="addbackend-employee.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Full name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nhập họ tên...">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Nhập số điện thoại...">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Chọn ảnh...">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <select id="inputState" name="position" class="form-control">
                            <option option selected></option>
                            <option>Leader</option>
                            <option>Senior</option>
                            <option>Junior</option>
                            <option>Fresher</option>
                            <option>Designer</option>
                        </select>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Đăng ký</button>
                    <a class="btn btn-danger" href="../main.php">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</body>