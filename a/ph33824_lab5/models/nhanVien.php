<?php
class NhanVien
{
    private $db;

    public function __construct($db)
    {
        $this->db = new Database();

    }
    public function getAll()
    {
        $sql = "SELECT * FROM nhanvien ";
        return $this->db->getAll($sql);
    }

}
?>