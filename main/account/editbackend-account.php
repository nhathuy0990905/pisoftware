<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    $username = $_GET['username'];
    

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $image = $_POST['image'];
        $fullname = $_POST['fullname'];

        $sql = "UPDATE account SET username='$username', password='$password', image='$image', fullname='$fullname' WHERE username='$username'";
        $query=mysqli_query($connect,$sql);
        header('Location: account.php');
    }
?>