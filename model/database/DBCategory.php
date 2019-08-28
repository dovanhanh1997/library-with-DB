<?php
include_once 'model/class/Category.php';

class DBCategory
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function add($category)
    {
        $sqlStm = "INSERT INTO categories (name,exist,loaned) VALUES (:name,:exist,:loaned)";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':name', $category->name);
        $query->bindParam(':exist', $category->exist);
        $query->bindParam(':loaned', $category->loaned);
        return $query->execute();
    }

    public function getCategories()
    {
        $sqlStm = "SELECT * FROM categories";
        $query = $this->connection->prepare($sqlStm);
        $query->execute();
        $result = $query->fetchAll();
        $categories = [];
        foreach ($result as $row) {
            $category = new Category($row['name'], $row['exist'], $row['loaned']);
            $category->cateNumber = $row['cateNumber'];
            $categories[] = $category;
        }
        return $categories;
    }

    public function getCategory($id){
        $category = null;
        $sqlStm = "SELECT * FROM categories WHERE cateNumber = :cateNumber;";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':cateNumber',$id);
        $query->execute();
        $result = $query->fetchAll();
        foreach ($result as $row){
            $category = new Category($row['name'],$row['exist'],$row['loaned']);
            $category->cateNumber = $row['cateNumber'];
        }
        return $category;
    }

    public function update($cateNumber,$category){
        $sqlStm = "UPDATE categories SET name=:name,exist=:exist,loaned=:loaned WHERE cateNumber=:cateNumber;";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':name',$category->name);
        $query->bindParam(':exist',$category->exist);
        $query->bindParam(':loaned',$category->loaned);
        $query->bindParam(':cateNumber',$cateNumber);
        return $query->execute();
    }

    public function delete($id){
        $sqlStm = "DELETE FROM categories WHERE cateNumber=:cateNumber;";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':cateNumber',$id);
        $query->execute();
    }
}