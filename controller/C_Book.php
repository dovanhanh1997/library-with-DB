<?php
include_once 'model/database/DBConnect.php';
include_once 'model/database/DBBook.php';
include_once 'model/class/Book.php';
class C_Book{
    public $DBBook;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBBook = new DBBook($connection->connect());
    }

    public function render(){
        $books = $this->DBBook->bookList();
        include 'view/books/list.php';

    }
}