<?php
// 1. Hàm: function ten_ham();

// 1.1. Hàm không trả về giá trị
// - Không tham số
function xinchao()
{
    echo "Xin chào các bạn";
}

xinchao();
echo "<br>";
// - Có tham số
function xinhaots($str)
{
    echo $str;
}

xinhaots("Lớp WEB2014.03");
echo "<br>";
//
function hoitham($str = "com")
{
    echo "Em ăn " . $str . " chưa?";
}

hoitham();
echo "<br>";
hoitham();
echo "<br>";
hoitham();
echo "<br>";
hoitham();
echo "<br>";
hoitham("cháo");
echo "<br>";
hoitham();
echo "<br>";
hoitham();
echo "<br>";
// 1.2 Hàm trả trả về giá trị: có return
// - Không tham số
function tinhtong()
{
    $a = 4;
    $b = 10;
    return $a + $b;
}

$sum = tinhtong();
echo $sum;
echo "<br>";
// - Có tham số
function tinhtongts($a)
{
    $b = 5;
    return $a + $b;
}

$sum1 = tinhtongts(4);
echo $sum1;
?>