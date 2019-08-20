<?php
include_once "../Database/DBCategory.php";
$category = new DBCategory();

function render(DBCategory $category)
{
    $category->render();
}

function add(DBCategory $category)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $category->name = $_POST['cateName'];
        $category->exist = $_POST['bookExist'];
        $category->loaned = $_POST['bookLoaned'];

        $category->create();
    }
}

function delete(DBCategory $category)
{
    $category->cateNumber = $_GET['id'];
    $category->delete();
}

function update(DBCategory $category)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $category->name = "'" . $_POST['newName'] . "'";
        $category->exist = $_POST['newExist'];
        $category->loaned = $_POST['newLoaned'];
        $category->cateNumber = $_GET['id'];

        $category->update();
        ?>
        <script>
            window.location.replace("index.php");
        </script><?php
    }
}


