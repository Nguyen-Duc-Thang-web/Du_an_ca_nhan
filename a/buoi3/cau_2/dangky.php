<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Đăng ký tài khoản</h2>
    <form action="" method="post">
        <label for="">tài khoản :
            <input type="text" name="user" required>
        </label><br>
        <label for="">họ và tên :
            <input type="text" name="fullname" required>
        </label><br>
        <label for="">email :
            <input type="email" name="email" required>
        </label>
        <br>
        <label for="">số điện thoại :
            <input type="number" name="sdt" required>
        </label><br>
        <label for="">mật khẩu :
            <input type="text" name="pass" required>
        </label>
        <input type="submit" name="dangky">
    </form>
    <?php
    if (isset($_POST['dangky'])) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['sdt'] = $_POST['sdt'];
        $_SESSION['pass'] = $_POST['pass'];
        header("location: thanhcong.php");
        exit();
    }
    ?>
</body>

</html>