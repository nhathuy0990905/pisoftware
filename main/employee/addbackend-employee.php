<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    if(isset($_POST['add'])){
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $image = $_POST['image'];
        $position = $_POST['position'];

        $sql = "INSERT INTO employee(fullname,address,phone,image,position) VALUES('$fullname','$address','$phone','$image','$position')";
        $query=mysqli_query($connect,$sql);
        header('Location: ../main.php');
    }
    
?>