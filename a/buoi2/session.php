<?php
session_start();
// SESSION: để sử dụng được session thì phải khai báo session_start() ở đầu file php
// $_SESSION['username'] = "huynx15";
// echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>

<body>
    <h2>Đăng nhập</h2>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="user" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="user" name="user" aria-label="Text input with checkbox">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="pass" name="pass"
                    aria-label="Text input with radio button">
            </div>
            <button type="submit" class="btn btn-info" name="btntsend">Đăng nhập</button>
        </form>
    </div>
    <?php
    if (isset($_POST['btntsend'])) {
        // echo $_POST['user'];
        // echo $_POST['pass'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == 'ngọc' && $pass == '123') {
            $_SESSION['user'] = $user;
            header("location: session_1.php");
        } else {
            echo "Username hoặc Password không chính xác. Vui lòng thử lại";
        }
    }
    ?>
</body>

</html>