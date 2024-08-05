<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            font-size: 35px;
            text-align: center;
        }

        .v {
            font-size: 25px;
            text-align: center;

        }
    </style>
</head>

<body>
    <script>
        alert('tạo tài khoản thành công');
    </script>

    <h2>trang thông tin</h2>
    <div class="v">
        <?php
        if (isset($_SESSION['user'])) {
            echo "Tài khoản: $_SESSION[user];<br>";
            echo "Họ và tên: $_SESSION[fullname];<br>";
            echo "Email: $_SESSION[email];<br>";
            echo "Số điện thoại: $_SESSION[sdt];<br>";
            echo "Mật khẩu: $_SESSION[pass];<br>";
        } else {
            echo " không có thông tin";

        }
        ?>
    </div>
</body>

</html>