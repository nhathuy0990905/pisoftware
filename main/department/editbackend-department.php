<?php
    require_once "../../connect/connect.php";
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../login.php');

    $id = $_GET['id'];
    

    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        $sql = "UPDATE department SET name='$name' WHERE id='$id'";
        $query=mysqli_query($connect,$sql);
        header('Location: department.php');
    }
?>