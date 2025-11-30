<?php

    session_start();
    require_once "../dbcontroller.php";
    $db = "new DB";

    if (!isset($_SESSION['user'])) {
        header("location:login.php");
    }
    if (isset($_GET['log'])) {
        session_destroy();
        header("location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Restoran</h2>
            </div>
            <div class="col-md-9">
                <div class="float-right mt-4" <a href="?log=logout">Logout</a></div>
                <div class="float-right mt-4 mr-4"> User <a href="?f=user&m=updateuser&id= <?php echo $_SESSION['iduser']?>"> <?php echo $_SESSION['user']; ?></a></div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select"></a>Kategori</li>
                    <li class="nav-item"><a class="nav-link" href="?f=menu&m=select"></a>Menu</li>
                    <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select"></a>Pelanggan</li>
                    <li class="nav-item"><a class="nav-link" href="?f=order&m=select"></a>Order</li>
                    <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select"></a>Order Detail</li>
                    <li class="nav-item"><a class="nav-link" href="?f=user&m=select"></a>User</li>
                </ul>
            </div>
            <div class="col-md-9">
                <?php

                    if(isset($_GET['f']) && isset($_GET['m'])){
                        $f=$_GET['f'];
                        $m=$_GET['m'];
                        
                        require_once $f/$m.php;
                    }

                ?>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col">
                <p class="text-center">2025 - copyright@smkn2buduran.com</p>
            </div>
        </div>
    </div>
</body>
</html>