<?php
namespace Company;

class Employee
{
    private $maNhanVien;
    private $tenNhanVien;
    private $luong;
    private $phongBan;
    private $luongCoBan;
    private $phuCap;
    public function __construct($a = "ph", $b = "nguyễn đ thăng", $c = 45, $d = "web", $e = 6, $f = 5)
    {
        $this->maNhanVien = $a;
        $this->tenNhanVien = $b;
        $this->luong = $c;
        $this->phongBan = $d;
        $this->luongCoBan = $e;
        $this->phuCap = $f;
    }
    //mã 
    public function getmaNhanVien()
    {
        return $this->maNhanVien;
    }
    public function setmaNhanVien($value)
    {
        $this->maNhanVien = $value;
    }
    //tên
    public function gettenNhanVien()
    {
        return $this->tenNhanVien;
    }
    public function settenNhanVien($value)
    {
        $this->tenNhanVien = $value;
    }
    //lương
    public function getluong()
    {
        return $this->luong;
    }
    public function setluong($value)
    {
        $this->luong = $value;
    }
    //phòng ban
    public function getphongBan()
    {
        return $this->phongBan;
    }
    public function setphongBan($value)
    {
        $this->phongBan = $value;
    }
    //luong co ban
    public function getluongCoBan()
    {
        return $this->luongCoBan;
    }
    public function setluongCoBan($value)
    {
        $this->luongCoBan = $value;
    }
    //phụ cấp
    public function getphuCap()
    {
        return $this->phuCap;
    }
    public function setphuCap($value)
    {
        $this->phuCap = $value;
    }
    public function getInfo(): void
    {
        echo "Mã nhân viên: " . $this->maNhanVien . "<br>";
        echo "Tên nhân viên: " . $this->tenNhanVien . "<br>";
        echo "Lương: $" . $this->luong . "<br>";
        echo "Phòng ban: " . $this->phongBan . "<br>";
        echo "Lương cơ bản: $" . $this->luongCoBan . "<br>";
        echo "Phụ cấp: $" . $this->phuCap . "<br>";
    }
    public function calculateSalary(): float
    {
        return $this->luongCoBan + $this->phuCap;
    }

}