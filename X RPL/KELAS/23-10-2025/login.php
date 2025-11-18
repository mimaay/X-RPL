<h1>login</h1>

<form action="" method="POST">
    <input type="email" name="email" placeholder="email"> <br>
    <input type="password" name="password" placeholder="password"> <br>
    <input type="submit" value="login" name="login">
</form>

<?php
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "yeudahsihhh31@gmail.com" && $_password == "1234"){
        $_SESSION['email'] = $email;
        header("location: index.php");
        echo "email atau password salah";
    }
}
?>