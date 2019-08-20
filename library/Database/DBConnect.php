<?php


class DBConnect
{
    public $servername = "localhost";
    public $username = "hanhphp";
    public $password = "dovanHanh1997";
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . $this->servername . ";dbname=libraries", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            return "Connection Failed: " . $e->getMessage();
        }
    }

    public function closeConnect()
    {
        $this->conn = null;
    }


}