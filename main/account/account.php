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
                <div class="input-group">
                    <div class="form-outline">
                        <form action="search.php" method="POST">  
                            <input name="username" class="form-control" type="search" id="form1" placeholder="Nhập tên tài khoản ..." />
                            <input name="submit" type="submit" class="btn btn-success" value="Tìm kiếm">
                            <a href="add-account.php" class="btn btn-warning" style="margin: 20px 0px;">
                                Add <i class="fas fa-plus-circle"></i>
                            </a>
                        </form>
                    </div>
                </div>
                
                <table class="table-pisoftware">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Image</th>
                            <th>Fullname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($query)){
                        ?>
                            <tr id="data">
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><img src="../../image/<?php echo $row['image']?>" width="50%"/></td>
                                <td><?php echo  $row['fullname']?></td>
                                <td>
                                    <a href="edit-account.php?username=<?php echo $row['username'];?>" class="btn btn-success">
                                        Edit <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="delete-account.php?username=<?php echo $row['username']; ?>" class="btn btn-danger">
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
                    <p style="text-align: center;color:white">
                        Page <?php echo $page;?> of 3
                    </p>
                    <nav aria-label="Page navigation example">                        <!-- Bootstrap 4 : Pagination -->
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="?per_page=4&page=1" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="?per_page=4&page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="?per_page=4&page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="?per_page=4&page=3">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="?per_page=4&page=3" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>                                          <!-- Bootstrap 4 : Pagination -->
                </div>
            </div>
        </div>
    </div>
    <?php
        include '../../include/menu-right.php'
    ?>
</body>            