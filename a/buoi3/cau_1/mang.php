<?php
$product = array(
    array(
        "id" => 1,
        "name" => "iPhone 12",
        "price" => 100000,
        "image" => "12.jpg"
    ),
    array(
        "id" => 2,
        "name" => "iPhone 13",
        "price" => 200000,
        "image" => "13.jpg"
    ),
    array(
        "id" => 3,
        "name" => "iPhone 14",
        "price" => 300000,
        "image" => "14.jpg"
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 80%;
            margin: 0 auto;
        }

        .box-sp {
            display: flex;
            justify-content: center;
            width: 80%;
            margin-top: 20px;

        }

        .box {
            width: 25%;
            border-radius: 15px;
            border: black 2px solid;
            margin-right: 30px;
            padding: 15px;

        }

        .box .noidung {
            text-align: center;
            Text-transform: uppercase;
            font-weight: bold;

        }

        .noidung .name {
            color: black;
            font-size: 20px;
        }

        .noidung .gia {
            color: red;
            font-size: 30px;

        }

        .box img {
            max-width: 200px;
            max-height: 400px;
            margin-left: 19%;
        }

        h2 {
            color: gold;
            text-align: center;

        }
    </style>
</head>

<body>
    <h2>DANH SÁCH SẢN PHẨM</h2>
    <div class="box-sp">
        <?php foreach ($product as $a) { ?>
            <div class="box">
                <img src="<?php echo $a['image']; ?>" ?>">
                <div class="noidung">
                    <div class="name"><?php echo $a['name']; ?></div>
                    <div style="display: flex; justify-content: center; magin:auto;">giá :
                        <div class="gia">
                            <?php echo $a['price']; ?> VND
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>