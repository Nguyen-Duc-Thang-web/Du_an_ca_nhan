<?php
session_start();
// echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Trang chủ</h2>
    <?php
    if (isset($_SESSION['user'])) {
        ?>
        <p>Xin chào: <b><?php echo $_SESSION['user']; ?></b></p>
        <?php
    } else {
        ?>
        <p><a href="session.php">Đăng nhập</a></p>
        <?php
    }
    ?>
</body>

</html>