<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <h1 class="text-center text-danger">add product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            Tên Sản Phẩm :
            <input class="form-control" type="text" name="name">
        </div>
        <div>
            Giá Sản Phẩm :
            <input class="form-control" type="text" name="price">
        </div>
        <div>
            Ảnh Sản Phẩm :
            <input class="form-control m-3" type="file" name="image" value="">
        </div>
        <input class="btn btn-info" type="submit" name="btnend" value="add ">
    </form>
    <p><?php if (isset($thongbao)) {
        echo $thongbao;
    } ?></p>
</body>

</html>