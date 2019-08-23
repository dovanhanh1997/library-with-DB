<?php

class DBCategory
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function add ($category){
        $sqlStm = "INSERT INTO categories (name,exist,loaned) VALUES (:name,:exist,:loaned)";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':name',$category->name);
        $query->bindParam(':exist',$category->exist);
        $query->bindParam(':loaned',$category->loaned);
        return $query->execute();
    }

//    public function getCategory(){
//
//    }
}