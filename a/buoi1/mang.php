<?php
// Ôn tập
// 1. Mảng tuần tự:
// Khai báo:
// Cách 1:
$mang1 = ["Sản phẩm 1", "Sản phẩm 2", "Sản phẩm 3"];
// Cách 2:
$mang2 = array("Sản phẩm 1", "Sản phẩm 2", "Sản phẩm 3");
// Truy xuất phần tử mảng
echo $mang1[1] . "<br>";
echo $mang2[0];

// 2. Mảng liên hợp
$mang3 = array(
    "maSV" => "huynx15",
    "hoten" => "Nguyễn Xuân Huy",
    "diemthi" => 10,
    1 => "Nam"
);
echo "<br>";
echo $mang3["hoten"];
echo "<br>";
echo $mang3[1];
echo "<br>";

// Vòng lặp
// for i
// Lấy ra tất cả các phần tử ở mảng 1:
echo "Các sản phẩm trong mảng 1: <br>";
for ($i = 0; $i < sizeof($mang1); $i++) {
    echo $mang1[$i] . "<br>";
}

// foreach
// Lấy ra tất cả các phần tử ở mảng 2:
echo "Các sản phẩm trong mảng 2: <br>";
foreach ($mang2 as $value) {
    echo $value . "<br>";
}

// Mảng 2 chiều
$mang5 = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15),
);
// Truy xuất phần tử có giá trị là 3
echo $mang5[0][2] . "<br>";
// Lấy tất cả các phần tử trong mảng
foreach ($mang5 as $arr) {
    foreach ($arr as $numb) {
        echo $numb . "<br>";
    }
}

$mang4 = array(
    array(
        "id" => 1,
        "name" => "Sản phẩm 1",
        "price" => 100000
    ),
    array(
        "id" => 2,
        "name" => "Sản phẩm 2",
        "price" => 200000
    ),
    array(
        "id" => 3,
        "name" => "Sản phẩm 3",
        "price" => 300000
    ),
);
// Hiển thị thông tin sản phẩm
foreach ($mang4 as $product) {
    echo $product['id'] . " - " . $product['name'] . " - " . $product['price'] . "<br>";
}
echo "<br>";
// Hiển thị dưới dạng bảng
?>
<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($mang4 as $product) {
            ?>
            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['price'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>