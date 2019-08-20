<?php
include_once "../../Database/DBCategory.php";
include_once "../../Function/category.php";

update($category); ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>LIBRARIES MANAGER</h1><br><br>
    <h2><a href="./index.php">Home</a>|Book|Reader|Borrow Books|Categories</h2>
</head>
<body>
<h3>Edit Category</h3>
<div>
    <form action="" method="post">

        <h4>Update Data</h4>
        New Name :<input type="text" name="newName"><br>
        Book Exist :<input type="text" name="newExist"><br>
        Book Loaned :<input type="text" name="newLoaned"><br>
        <button type="submit">Update</button>

    </form>

</div>
</body>
</html>