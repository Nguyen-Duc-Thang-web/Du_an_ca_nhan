<?php
class Rectangle
{
    public $chieuDai;
    public $chieuRong;
    public function getArea()
    {
        return $this->chieuDai * $this->chieuRong;
    }
    public function getPerimeter()
    {
        return 2 * ($this->chieuRong + $this->chieuRong);
    }
    public function drawRectangle()
    {
        echo '<div style="width: ' . $this->chieuDai . 'px; height: ' . $this->chieuRong . 'px; border: 1px solid black;"></div>';
    }



}
$cn = new Rectangle;
$cn->chieuDai = 100;
$cn->chieuRong = 50;
echo "Chiều Dài : " . $cn->chieuDai;
echo "<br>";
echo "Chiều Rộng : " . $cn->chieuRong;
echo "<br>";
echo "Diện Tích : " . $cn->getArea();
echo "<br>";
echo "Chu vi : " . $cn->getPerimeter();
echo "<br>";
$cn->drawRectangle();
