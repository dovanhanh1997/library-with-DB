<?php
include_once 'model/database/DBConnect.php';
include_once 'model/database/DBCategory.php';
include_once 'model/class/Category.php';

class C_Category
{
    public $DBCategory;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBCategory = new DBCategory($connection->connect());
    }

    public function add()
    {
        include 'view/category/add.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $exist = $_POST['exist'];
            $loaned = $_POST['loaned'];

            $category = new Category($name, $exist, $loaned);
            $this->DBCategory->add($category);
        }
    }

    public function render()
    {
        $categories = $this->DBCategory->getCategories();
        include 'view/category/list.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cateNumber = $_POST['id'];
            $name = $_POST['name'];
            $exist = $_POST['exist'];
            $loaned = $_POST['loaned'];

            $category = new Category($name, $exist, $loaned);
            $this->DBCategory->update($cateNumber, $category);
            header('location: index.php?page=category');
        } else {
            include 'view/category/update.php';
            $id = $_GET['id'];

        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $this->DBCategory->delete($id);
            header('location: index.php?page=category');
        } else {
            include 'view/category/delete.php';
        }
    }
}

