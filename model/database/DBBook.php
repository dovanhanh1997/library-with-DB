<?php

class DBBook
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function bookList(){
        $stmt="SELECT b.bookNumber,b.bookName,b.loan,b.exist,b.total,c.name FROM books b INNER JOIN categories c ON c.cateNumber = b.cateNumber;";
        $query = $this->connection->prepare($stmt);
        $query->execute();
        $result = $query->fetchAll();
        $books = [];
        foreach ($result as $row){
            $book = new Book($row['bookName'],$row['loan'],$row['total'],$row['name']);
            $books[] = $book;
        }
        return $books;
    }

}