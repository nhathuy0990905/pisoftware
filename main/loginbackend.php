<?php
    require_once 'connect.php';
    session_start();

    if(isset($_POST["btn-submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $username = strip_tags($username);
	    $username = addslashes($username);
	    $password = strip_tags($password);
	    $password = addslashes($password);
        if($username == "" || $password == "")
            header('Location: login.php');
        else{
            $sql = "SELECT * FROM account WHERE username = '".$username."'AND password = '".$password."' LIMIT 1";
            $query = mysqli_query($connect,$sql);
            $results = mysqli_num_rows($query);
            if($results == 0)
                header('Location: login.php');
            else{
                $_SESSION['username'] = $username;
                header('Location: main.php');
            }
        }
    }
?>