<?php
namespace Buoi5;

class Student
{
    public $name;
    public $maSinhVien;
    public function __construct($a = "", $b = "")
    {

        // echo "Đây là hàm construct";
        $this->maSinhVien = $a;
        $this->name = $b;

    }
    public function __destruct()
    {

        echo "xin chào việt nam jHA";
    }
    public function xinChao()
    {
        echo "xin chào việt nam";
    }
}
