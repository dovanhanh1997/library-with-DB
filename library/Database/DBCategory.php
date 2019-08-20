<?php
include_once "DBConnect.php";

class DBCategory
{
    public $name;
    public $exist;
    public $loaned;
    public $lost;
    public $cateNumber;
    public $PDO;
    public $conn;
    public $data;

    public function __construct()
    {
        $this->PDO = new DBConnect();
        $this->conn = $this->PDO->conn;
    }

    public function create()
    {
        $this->data = $this->conn->prepare("INSERT INTO categories (name,exist,loaned) VALUES (:name,:exist,:loaned);");
        $this->data->bindParam(":name",$this->name);
        $this->data->bindParam(":exist",$this->exist);
        $this->data->bindParam(":loaned",$this->loaned);
        $this->data->execute();
    }

    public function render()
    {
        $this->data = $this->conn->prepare("SELECT * FROM categories");
        $this->data->setFetchMode(PDO::FETCH_ASSOC);
        $this->data->execute();
    }

    public function delete(){
        $this->data = $this->conn->prepare("DELETE FROM categories WHERE cateNumber = $this->cateNumber");
        $this->data->execute();
    }

    public function update(){
        $this->data = $this->conn->prepare("UPDATE categories SET name = $this->name, exist= $this->exist,loaned=$this->loaned WHERE cateNumber =$this->cateNumber;");
        $this->data->execute();
    }
}