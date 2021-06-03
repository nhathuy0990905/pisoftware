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

    $row = 6;											// 1 phân trang có 6 hàng dữ liệu
    $from = ($page - 1)*$row;							// Tổng số phân trang = ( Trang - 1 ) * $row
    $sql = "SELECT * FROM account LIMIT $from,$row";
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
            <?php  
            	if (isset($_POST['submit'])) {
            		if (empty($_POST["name"])){
            ?>
                        <div style="text-align: center;padding-top: 30px;padding-bottom: 30px">
		                    <?php
                                echo '<b style="color:white;text-align: center;">Nhập dữ liệu vào ô tìm kiếm để tiếp tục</b>';
                            ?>
                        </div>
                        <div style="text-align: center;">  
                            <a href="department.php" class="btn btn-success">
                                Quay lại trang chủ
                            </a>
                        </div>
            <?php
                    }
                    else{
                        $name = $_POST['name'];
			            $query = "SELECT * FROM department WHERE name LIKE '%$name%'";
			            $sql = mysqli_query($connect,$query);
			            $num = mysqli_num_rows($sql);
			            if ($num>0 && $name!="") 	{
            ?>
                            <table class="table-pisoftware">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr id="data">
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><img src="../../image/<?php echo $row['image']?>" width="50%"/></td>
                                            <td>
                                                <a href="edit-department.php?id=<?php echo $row['id'];?>" class="btn btn-success">
                                                    Edit <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="delete-department.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                                    Delete <i class="fas fa-user-minus"></i>                            
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <div class="card-footer" style="text-align: center;"> 
                                <a href="department.php" class="btn btn-success">
				            		Quay lại trang trước
				            	</a>                              
                            </div>
            </div>
            <?php
                        }
                        else
                        {
            ?>
                            <div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px">
				            	<div class="card">
				            		<div class="card-header" style="text-align: center;">
				            			<b>Không tìm thấy kết quả với từ khoá <b style="color:red"><?php echo "$name" ?></b></b>
				            		</div>
				            		<div class="card-footer" style="text-align: center;">
				            			<a href="department.php" class="btn btn-success">
				            				Quay lại trang trước
				            			</a>
				            		</div>
				            	</div>
				            </div>
            <?php
                        }
                    }
                }
            ?>
        
    <?php
        include '../../include/menu-right.php'
    ?>
</body>            