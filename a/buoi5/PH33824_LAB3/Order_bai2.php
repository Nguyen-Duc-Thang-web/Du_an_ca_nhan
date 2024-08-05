<?php
class SanPham
{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}
class Order
{
    public $maDonHang;
    public $ngayDatHang;
    public $tenKhachHang;
    public $cacSanPham;
    public function __construct($a = "", $b = "", $c = "", $d = [])
    {
        $this->maDonHang = $a;
        $this->ngayDatHang = $b;
        $this->tenKhachHang = $c;
        $this->cacSanPham = $d;
    }
    public function addProduct(SanPham $p)
    {
        $this->cacSanPham[] = $p;
    }
    public function tinhTongGiaTri()
    {
        $summ = 0.0;
        foreach ($this->cacSanPham as $sp) {
            $summ += $sp->getPrice();
            # code...
        }
        return $summ;

    }
    public function hienThiThongTinDonHang(): void
    {
        echo "Mã đơn hàng: " . $this->maDonHang . "\n";
        echo "Ngày đặt hàng: " . $this->ngayDatHang . "\n";
        echo "Tên khách hàng: " . $this->tenKhachHang . "\n";
        echo "Các sản phẩm:\n";
        foreach ($this->cacSanPham as $sanPham) {
            echo "- " . $sanPham->getName() . ": $" . $sanPham->getPrice() . "\n";
        }
        echo "Tổng giá trị: $" . $this->tinhTongGiaTri() . "\n";
    }
}
echo "<pre>";
$product1 = new SanPham("kem đánh răng", 100);
$product2 = new SanPham("sửa rửa mặt", 200);

$order = new Order("ORD001", "2024-07-10", "John Doe", [$product1, $product2]);
var_dump($order);
//thêm 1 sản phẩm
$product3 = new SanPham("dưa chuột", 600);
$order->addProduct($product3);
//hiển thị thông tin đơn hàng
$order->hienThiThongTinDonHang();