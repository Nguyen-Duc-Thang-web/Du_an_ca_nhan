<?php
require "Employee_bai3.php";

use Company\Employee;

$employee1 = new Employee("NV001", "Nguyễn Văn A", 1000.0, "Kỹ thuật", 800.0, 200.0);
$employee1->getInfo();
echo "Tổng lương: $" . $employee1->calculateSalary() . "<br>";

echo "<br>";

$employee2 = new Employee();

$employee2->setMaNhanVien("NV002");
$employee2->setTenNhanVien("Trần Thị B");
$employee2->setLuong(900.0);
$employee2->setPhongBan("Hành chính");
$employee2->setLuongCoBan(700.0);
$employee2->setPhuCap(200.0);

$employee2->getInfo();
echo "Tổng lương: $" . $employee2->calculateSalary() . "\n";
