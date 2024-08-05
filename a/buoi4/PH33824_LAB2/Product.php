<?php
class Product
{
    public $name;
    public $price;
    public $quantity;
    public function setname($value)
    {
        $this->name = $value;
    }
    public function setprice($value)
    {
        $this->price = $value;
    }
    public function setquantity($value)
    {
        $this->quantity = $value;
    }
    public function getInfo()
    {
        return "Name: " . $this->name . "<br>" .
            "Price: " . $this->price . "<br>" .
            "Quantity: " . $this->quantity . "<br>";
    }
    public function calculateTotal()
    {
        return $this->price * $this->quantity;
    }
}
$p = new Product();
$p->name = "iphone 15";
$p->price = 19;
$p->quantity = 2;
echo $p->getInfo();
echo "Tổng giá tiền : " . $p->calculateTotal();