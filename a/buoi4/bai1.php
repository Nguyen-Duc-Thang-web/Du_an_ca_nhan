<?php
//khai báo
class Student
{
    // khai báo thuộc tính
    public $hoTen;
    public $diemThi;
    //khai báo phương thức
    public function xinChao()
    {
        return "Đang học lại php1";
    }
    //ACESS LEVEL
    /** 
     *public: truy cập dữ liệu ở ngoài class
     *protected: chỉ truy suất dữu liệu trong class hoặc class con kế thừa
     *privated: chỉ truy suất trong class
     */
    protected $phone = "096354656";
    private $email = "thangndph33824@fpt.edu.vn";
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($value)
    {
        $this->email = $value;
    }
    //demo
    //tạo hàm setter và getter cho thuộc tính điểm thi
    public function getDiemThi()
    {
        return $this->diemThi;
    }
    public function setDiemThi($value)
    {
        $this->diemThi = $value;
    }
    //TẠO PHƯƠNG THỨC XẾP LOẠI
    public function xepLoai()
    {
        if ($this->diemThi >= 8) {
            return "loại giỏi";
        } else if ($this->diemThi >= 6.5) {
            return "loại khá";
        } else if ($this->diemThi >= 5) {
            return "loại tb";
        } else if ($this->diemThi < 5) {
            return "loại yếu";
        }

    }
}
//khởi tọa đối tượng
$std = new student;
// var_dump($std);
//truy xuất 
$std->hoTen = "nguyễn đức thắng";
var_dump($std);
echo $std->hoTen;
//gọi phương thức
echo "<br>";
echo $std->xinChao();
echo "<br>";
echo $std->getEmail();
$std->setEmail("ducthang@gmail.com");
echo "<br>";
echo $std->getEmail();
$std->diemThi = "10";
echo $std->xepLoai();