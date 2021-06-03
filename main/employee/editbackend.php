<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    $id = $_GET['id'];
    

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];

        $sql = "UPDATE employee SET fullname='$fullname', address='$address', phone='$phone', position='$position' WHERE id='$id'";
        $query=mysqli_query($connect,$sql);
        header('Location: ../main.php');
    }
?>