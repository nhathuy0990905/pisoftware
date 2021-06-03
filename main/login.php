<?php
    require_once 'connect.php';
    session_start(); 
?>

<body>
    <div class="login">
        <div class="left">
            <div class="left-1">
                <div class="left-1-1">
                    <img src="image/Pi.png" class="img-1-1-1">
                </div>
                <div class="left-1-2">
                    <div class="left-1-2">
                        <div class="left-1-2-1">
                            Hệ thống quản trị doanh nghiệp hàng đầu thế giới.
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="right">
            <form action="main/loginbackend.php" method="POST">
                <b class="nameCompany">
                    Pi Software
                </b>
                <fieldset>
                    <legend>
                        <img src="image/logo.png" width="100px">
                    </legend>
                    <table align="center">
                        <tr>
                            <td><img src="image/user.png" width="55px"></td>
                            <td><input type="text" name="username"size="30" placeholder="Nhập Username"></td>
                        </tr>
                        <tr>
                            <td><img src="image/pass.png" width="55px"></td>
                            <td><input type="password" name="password"size="30" placeholder="Nhập Password"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="btn-submit" value="login" class="btn-submit">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <div class="default">
                    <span class="text-default">Hoặc đăng nhập với</span>
                </div>
                <div>
                    <ul class="logo-default">
                        <li class="item">
                            <i class="fab fa-facebook-square"></i>
                        </li>
                        <li class="item">
                            <i class="far fa-envelope"></i>
                        </li>
                        <li class="item">
                            <i class="fab fa-twitter-square"></i>
                        </li>
                        <li class="item">
                            <i class="fab fa-google"></i>
                        </li>
                        <li class="item">
                            <i class="fab fa-apple"></i>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</body>