<?php

class DBBook
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function bookList()
    {
        $stmt = "SELECT b.bookNumber,b.bookName,b.loan,b.exist,b.total,c.name FROM books b INNER JOIN categories c ON c.cateNumber = b.cateNumber;";
        $query = $this->connection->prepare($stmt);
        $query->execute();
        $result = $query->fetchAll();
        $books = [];
        foreach ($result as $row) {
            $book = new Book($row['bookName'], $row['loan'], $row['total']);
            $book->cateName = $row['name'];
            $book->bookNumber = $row['bookNumber'];
            $books[] = $book;
        }
        return $books;
    }

    public function add($book)
    {
        $stmt = "INSERT INTO books (bookName,loan,exist,total,cateNumber) VALUES (:bookName,:loan,:exist,:total,:cateNumber);";
        $query = $this->connection->prepare($stmt);
        $query->bindParam(':bookName', $book->name);
        $query->bindParam(':loan', $book->loan);
        $query->bindParam(':exist', $book->exist);
        $query->bindParam(':total', $book->total);
        $query->bindParam(':cateNumber', $book->cateNumber);
        $query->execute();
    }

    public function edit($book)
    {
        $stmt = "UPDATE books SET bookName=:bookName,loan=:loan,exist=:exist,total=:total,cateNumber=:cateNumber WHERE bookNumber=:bookNumber;";
        $query = $this->connection->prepare($stmt);
        $query->bindParam(':bookName', $book->name);
        $query->bindParam(':loan', $book->loan);
        $query->bindParam(':exist', $book->exist);
        $query->bindParam(':total', $book->total);
        $query->bindParam(':cateNumber', $book->cateNumber);
        $query->bindParam(':bookNumber', $book->bookNumber);
        $query->execute();
    }

    public function delete($bookNumber){
        $stmt = "DELETE FROM books WHERE bookNumber=:bookNumber";
        $query = $this->connection->prepare($stmt);
        $query->bindParam(':bookNumber',$bookNumber);
        $query->execute();

    }
}