<?php
include_once "../../Database/DBCategory.php";
include_once '../../Function/category.php';

render($category) ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>LIBRARIES MANAGER</h1><br><br>
    <h2><a href="books/bookList.php">Book</a>|Reader|Borrow Books|Categories</h2>
</head>
<body>
<h3>Categories List</h3>
<div>
    <table border="0" style="border-collapse: collapse; width: 100%; border: 1px solid navy;">
        <tr>
            <th>Code</th>
            <th>Category</th>
            <th>Update/Delete</th>
        </tr><?php

        while ($row = $category->data->fetch()) {
            ?>
            <tr>
            <td><?php echo $row['cateNumber'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><a href="./update.php?id=<?php echo $row['cateNumber']; ?>">Update</a></td>
            <td><a href=" ./delete.php?id=<?php echo $row['cateNumber']; ?>">Delete</a></td>
            </tr><?php
        }
        ?>
    </table>
</div>
<a href="./add.php">Add category</a>
</body>
</html>