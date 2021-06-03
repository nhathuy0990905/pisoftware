<?php
    $connect = mysqli_connect('localhost','root','','picompany');
    if($connect){
        mysqli_query($connect,"SET NAME 'UTF-8'");
    }
    else
        echo "Kết nối đến cơ sở dữ liệu không thành công.";
?>