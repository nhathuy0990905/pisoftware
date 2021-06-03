<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM department WHERE id=$id ";
    $query=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($query);

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
                <div class="card">
		            <div class="card-header">
		            	<h2 style="text-align: center;">Sửa thông tin phòng ban <b style="color: red;"><?php echo $row['name']; ?></b> </h2>
		            </div>
		            <div class="card-body">
		            	<form action="editbackend-department.php" method="POST" enctype="multipart/form-data">
		            		<div class="form-group">
		            			<label for="">Name</label>
		            			<input type="text" name="name" class="form-control" required value="<?php echo $row['name']; ?>">
		            		</div>
		            		<div class="form-group">
		            			<label for="">Image</label><br>
		            			<img src="../../image/<?php echo $row['image']?>" width="50%"/>
		            		</div>
		            		<button name="submit" type="submit" class="btn btn-success">Sửa</button>
		            		<a class="btn btn-danger" href="department.php">Quay lại</a>
		            	</form>
		            </div>
		            <div class="card-footer" style="text-align: center;font-size: 20px">
		            	<b>Designed By Nhat Huy</b>
		            </div>
            </div>
        </div>
    </div>