<?php
    require_once 'connect/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI SOFTWARE</title>
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>
<body>
    <?php
        if(isset($_GET['page_layout']))
            switch($_GET['page_layout']){
                case 'main':
                    require_once 'main/main.php';
                    break;
                case 'login':
                    require_once 'main/login.php';
                    break;
                case 'account':
                    require_once 'main/account/account.php';
                case 'department':
                    require_once 'main/department/department.php';
                    break;
                case 'employee':
                    require_once 'main/main.php';
                    break;
                default:
                    require_once 'main/login.php';
            }
        else
            require_once 'main/login.php';
    ?>
</body>
</html>