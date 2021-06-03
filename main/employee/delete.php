<?php
    require_once "../../connect/connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM employee WHERE id = $id";
    $query = mysqli_query($connect,$sql);
    header('Location: ../main.php');
?>