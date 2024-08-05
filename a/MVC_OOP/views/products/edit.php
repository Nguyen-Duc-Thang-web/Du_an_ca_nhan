<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="container">
    <h1 class="text-center text-danger">edit product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            Tên Sản Phẩm :
            <input class="form-control" type="text" name="name" value="<?= $data['name'] ?>">
        </div>
        <div>
            Giá Sản Phẩm :
            <input class="form-control" type="text" name="price" value="<?= $data['price'] ?>">
        </div>
        <div class="m-2">

            Ảnh Sản Phẩm :
            <input class="form-control" type="file" name="image" value="">
            <?php
            if ($data['image'] != "") {
                echo "<img src='" . IMG_PATH . $data['image'] . "' alt='' width=90>";
            }
            ?>
        </div>
        <input class="btn btn-warning m-3" type="submit" name="btnend" value="edit ">
    </form>
    <p><?php if (isset($thongbao)) {
        echo $thongbao;
    } ?></p>
</body>

</html>