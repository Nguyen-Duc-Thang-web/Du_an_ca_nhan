<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .acs {
            min-height: 50px;
        }
    </style>
</head>

<body class="container">
    <header>
        <div class="acs bg-warning text-center mt-2">MỞ ĐẦU TRANG</div>
    </header>
    <h1 class="text-center text-danger">danh sách sản phẩm</h1>
    <a class="btn btn-info m-3" href="<?= BASE_DIR ?>?act=add_product">thêm</a>
    <table class="table container" border="1" class="table container">
        <thead>
            <tr>
                <th>ID</th>
                <th>img</th>
                <th>Tên</th>
                <th>PRICE</th>
                <th class="text-center">Hành động</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $a) { ?>
                <tr>
                    <td><?= $a['id'] ?></td>
                    <td>
                        <?php
                        if ($a['image'] != "") {
                            echo "<img src='" . IMG_PATH . $a['image'] . "' alt='' width=90>";
                        }
                        ?>

                    </td>
                    <td><?= $a['name'] ?></td>
                    <td><?= $a['price'] ?></td>
                    <td class="text-center">
                        <a href="<?= BASE_DIR ?>?act=edit_product&id=<?= $a['id']; ?>" class="btn btn-warning">sứa</a>
                        <a href="<?= BASE_DIR ?>?act=delete_product&id=<?= $a['id']; ?>" class="btn btn-danger"
                            onclick="return confirm('delete ko')">delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <footer>
        <div class="acs bg-danger text-center mt-2">CHÂN TRANG TRANG</div>
    </footer>
</body>

</html>