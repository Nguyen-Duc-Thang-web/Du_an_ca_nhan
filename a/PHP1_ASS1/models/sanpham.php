<?php
class Sanpham
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();

    }
    public function getAll()
    {
        $sql = "SELECT * FROM sanphams ";
        return $this->db->getAll($sql);
    }
    public function insert($name, $danhmuc_id, $price, $quantity, $img)
    {
        $sql = "INSERT INTO `sanphams`(`name`, `danhmuc_id`, `price`, `quantity`, `image`) VALUES ('$name', $danhmuc_id, $price, $quantity, '$img')";
        $this->db->exec($sql);
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM sanphams WHERE id=$id ";
        return $this->db->getOne($sql);
    }
    public function update($id, $name, $danhmuc_id, $price, $quantity, $img)
    {
        $sql = "UPDATE `sanphams` SET `name` = '$name', `danhmuc_id` = $danhmuc_id, `price` = $price, `quantity` = $quantity, `image` = '$img' WHERE `id` = $id";
        $this->db->exec($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `sanphams` WHERE id=$id";
        $this->db->exec($sql);
    }
}