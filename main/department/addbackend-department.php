<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $image = $_POST['image'];

        $sql = "INSERT INTO department(name,image) VALUES('$name','$image')";
        $query=mysqli_query($connect,$sql);
        header('Location: department.php');
    }
    
?>