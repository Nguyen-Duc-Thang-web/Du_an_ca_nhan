<?php
class Employee
{
    public $name;
    public $age;
    public $salar;
    public $department;
    public function __construct($a = "Unknown", $b = 0, $c = 0.0, $d = "Unassigned")
    {
        $this->name = $a;
        $this->age = $b;
        $this->salar = $c;
        $this->department = $d;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($value)
    {
        $this->name = $value;
    }
    public function getage()
    {
        return $this->age;
    }
    public function setage($value)
    {
        $this->age = $value;
    }
    public function getsalar()
    {
        return $this->salar;
    }
    public function setsalar($value)
    {
        $this->salar = $value;
    }
    public function getdepartment()
    {
        return $this->department;
    }
    public function setdepartment($value)
    {
        $this->department = $value;
    }
    public function displayInfo()
    {
        echo "Tên Nhân Viên : " . $this->name . "<br>";
        echo "Tuổi Nhân Viên : " . $this->age . "<br>";
        echo "Lương Nhân Viên : " . $this->salar . "<br>";
        echo "Ban Nhân Viên làm việc : " . $this->department . "<br>";
    }

}
$employee1 = new Employee("nguyễn đức thắng", 20, 150, "phòng kinh doanh");
$employee1->displayInfo();
echo "<br>";
$employee2 = new Employee();
$employee2->setName("Nguyễn đức Truyền");
$employee2->setAge(25);
$employee2->setSalar(45000);
$employee2->setDepartment("Marketing");
$employee2->displayInfo();