<?php class Danhmuc
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM danhmucs";
        return $this->db->getAll($sql);
    }
    public function insert($name)
    {
        $sql = "INSERT INTO `danhmucs`(`name`) VALUES ('$name')";
        $this->db->exec($sql);
    }
    public function update($id, $name)
    {
        $sql = "UPDATE `danhmucs` SET `name` = '$name'  WHERE `id` = $id";
        $this->db->exec($sql);
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM danhmucs WHERE id=$id ";
        return $this->db->getOne($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `danhmucs` WHERE id=$id";
        $this->db->exec($sql);
    }
}

