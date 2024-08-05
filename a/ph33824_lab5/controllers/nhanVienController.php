<?php
class NhanVienController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function index()
    {
        $data = $this->db->getAll();
        require_once "./views/nhanvien/list.php";
    }
}
?>