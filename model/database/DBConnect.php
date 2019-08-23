<?php

class DBConnect{
    public $dsn;
    public $username;
    public $password;
    public $conn;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=libraries';
        $this->username='hanhphp';
        $this->password='dovanHanh1997';
    }

    public function connect(){
        try{
            $this->conn=new PDO($this->dsn,$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }catch (PDOException $exception){
            return 'Connect failed '.$exception->getMessage();
        }
    }
}

