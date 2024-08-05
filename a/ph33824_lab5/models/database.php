<?php
class Database
{

    public $conn;

    public function __construct()
    {
        $servername = DB_HOST;
        $database = DB_NAME;
        $username = DB_USER;
        $password = DB_PASS;

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }
    public function __destruct()
    {
        $this->conn = null;
    }
    public function getAll($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
