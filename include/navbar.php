<div class="data">
    <div id="header">
        <div id="header-inner">
           <div class="header-logo">
                <a href="../main/main.php" title="PiSoftware" class="logo">
                    <span class="logo-text-container">
                        <span class="logo-text">
                            Pisoftware
                        </span>
                    </span>
                </a>
           </div>
           <div class="header-search">
               <div class="header-search-inner">
                    <form action="#" method="POST">
                        <input type="text" class="header-search-input" placeholder="Nhập tên nhân viên và nhấn enter ...">
                    </form>
               </div>
           </div>
           <div class="header-personal">
               <div class="user-block">
                    <a href="#">
                        <span class="user-img ui-icon">
                            <i style="background: url('../image/nhathuy.jpg') no-repeat center; background-size: cover;"></i>
                            <img src="../image/nhathuy.jpg" width="100%" style="border-radius:20px">
                            <b style="color:white;"><?php echo $_SESSION['username'] ?></b>
                        </span>
                    </a>
               </div>
           </div> 
           <div class="header-search">
               <div class="header-search-inner">
                    <a class="btn btn-warning">
                        Nâng cấp <i class="fas fa-rocket"></i>
                    </a>
                    <a class="btn btn-success">
                        Mời <i class="fas fa-user-plus"></i>
                    </a>
               </div>
           </div>
        </div>
    </div>
</div>