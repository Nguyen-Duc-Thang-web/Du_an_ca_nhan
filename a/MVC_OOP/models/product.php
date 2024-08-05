<?php
class Product
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();

    }
    public function getAll()
    {
        $sql = "SELECT * FROM product ";
        return $this->db->getAll($sql);
    }
}