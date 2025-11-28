<?php
    session_start();
?>

<form action="" method="POST">
    Email <input type="email" name="password" required placeholder="Masukkan email"><br>
    Password <input type="password" name="password" requaired placeholder="Masukkan password"><br>
    <input type="submit" name="login" value="login"><br>
</form>

<?php
    if (isset($_POST['login'])) {
        $email = $POST['email'];
        $password = $POST['password'];

        $_SESSION['email'] = $email;

        echo "Email : " . $email . '<br>';
        echo "Password : " . $password . '<br>';
        echo '<meta http-equiv="refresh" content="1.5; url=login.php">';
    }

    $isi="tes";
    $hasil = isset($isi);

    echo $hasil;

?>
    <br>
<?php
    var_dump($hasil);
?>
    <br>
<?php
    if (isset($isi)) {
        echo "isi";
    }else {
        echo "no isi";
    }

    var_dump($isi);
?>