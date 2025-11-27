<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <style>
        
    </style>
</head>
<body>
    <div>
        <nav>
            <ol>
                <li><a href="?menu=profil">profil</a></li>
                <li><a href="?menu=sejarah">sejarah</a></li>
                <li><a href="?menu=jurusan">jurusan</a></li>
                <li><a href="?menu=prestasi">prestasi</a></li>
                <li><a href="?menu=kegiatan">kegiatan</a></li>
                <li><a href="?menu=kontak">kontak</a></li>
                <li><a href="?menu=profil">profil</a></li>
            </ol>
        </nav>
        <section>
            <?php
            if (isset($_GET['kirim'])){;
                $isi = $_GET["kirim"];
                if ($isi == "sejarah"){;
                    require_once "pages/sejarah.php";
                }
                if ($isi == "profil"){;
                    require_once "pages/profil.php";
                }
                if ($isi == "kegiatan"){;
                    require_once "pages/kegiatan.php";
                }
                if ($isi == "prestasi"){;
                    require_once "pages/prestasi.php";
                }
                if ($isi == "jurusan"){;
                    require_once "pages/jurusan.php";
                }
            }else
                require_once "pages/profil.php" 
            ?>
        </section>
        <footer>
            <p>
                web di buat oleh dinda and yemim
            </p>
        </footer>
    </div>
</body>
</html>