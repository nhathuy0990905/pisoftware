<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    if(isset($_POST['add'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $image = $_POST['image'];
        $fullname = $_POST['fullname'];

        $sql = "INSERT INTO account(username,password,image,fullname) VALUES('$username','$password','$image','$fullname')";
        $query=mysqli_query($connect,$sql);
        header('Location: account.php');
    }
    
?>