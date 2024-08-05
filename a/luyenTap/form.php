<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>form đăng nhập quản trị</h2>
    <form action="" method="post">
        <h3>user name</h3>
        <input type="text" name="user">
        <h3>password</h3>
        <input type="text" name="pass">
        <input type="submit" name="kiemTra">
    </form>
    <?php
    if (isset($_POST['kiemTra'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == 'a' && $pass == '123456') {
            $_SESSION['user'] = $user;
            header("location: session_1.php");
        }

    }
    ?>

</body>

</html>