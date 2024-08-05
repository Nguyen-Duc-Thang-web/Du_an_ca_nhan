<?php
class Home
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM sanphams";
        return $this->db->getAll($sql);
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = :username";
        $params = [':username' => $username];
        $user = $this->db->getOne($sql, $params);

        if ($user && $password === $user['password']) {
            return $user;
        }

        return false;
    }

    public function register($username, $password)
    {
        $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";
        $params = [
            ':username' => $username,
            ':password' => $password
        ];
        try {
            $this->db->exec($sql, $params);
            return true;
        } catch (Exception $e) {
            return $e->getMessage(); // Trả về thông báo lỗi
        }
    }

    public function getUserByUsername($username)
    {
        $sql = "SELECT * FROM user WHERE username = :username";
        $params = [':username' => $username];
        return $this->db->getOne($sql, $params);
    }
}

// public function register($username, $password)
// {
//     $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";
//     $params = [
//         ':username' => $username,
//         ':password' => $password
//     ];
//     return $this->db->exec($sql, $params);
// }