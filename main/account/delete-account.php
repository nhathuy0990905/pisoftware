<?php
    require_once "../../connect/connect.php";
    $username = $_GET['username'];
    $sql = "DELETE FROM account WHERE username = $username";
    $query = mysqli_query($connect,$sql);
    header('Location: account.php');
?>