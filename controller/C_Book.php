<?php
include_once 'model/database/DBConnect.php';
include_once 'model/database/DBBook.php';
include_once 'model/database/DBCategory.php';
include_once 'model/class/Book.php';

class C_Book
{
    public $DBBook;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBBook = new DBBook($connection->connect());
    }

    public function render()
    {
        $books = $this->DBBook->bookList();
        include 'view/books/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $C_Category = new C_Category();
            $categories = $C_Category->DBCategory->getCategories();
            include 'view/books/add.php';
        } else {
            $name = $_POST['name'];
            $loan = (int)$_POST['loan'];
            $exist = (int)$_POST['exist'];
            $total = $loan + $exist;
            $cateNumber = $_POST['cate'];

            $book = new Book($name,$loan,$total);
            $book->cateNumber = $cateNumber;
            $this->DBBook->add($book);
            header('location: index.php?page=books');
        }

    }


}