<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';

$libraries = new Libraries(openConn());
$sql = "SELECT bookNumber,bookName,exist,loan,total,categorys.cateName FROM books INNER JOIN categorys ON books.cateNumber = categorys.cateNumber";
$libraries->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>LIBRARIES MANAGER</h1><br><br>
    <h2> Home|Book|Reader|Borrow Books|Categories</h2>
</head>
<body>
<h3>Books List</h3>
<div>
    <table border="0" style="border-collapse: collapse; width: 100%; border: 1px solid navy;">
        <tr>
            <th>NO</th>
            <th>Book Name</th>
            <th>Book Exist</th>
            <th>Book Loaned</th>
            <th>Book Total</th>
            <th>Book Category</th>
        </tr>
        <?php
        if ($libraries->isNumRowsNotEmpty()) {
            while ($row = $libraries->result->fetch_assoc()) {
                ?>
                <tr>
                <td><?php echo $row['bookNumber']; ?></td>
                <td><?php echo $row['bookName']; ?></td>
                <td><?php echo $row['exist']; ?></td>
                <td><?php echo $row['loan']; ?></td>
                <td><?php echo $row['total']; ?></td>
                <td><?php echo $row['cateName']; ?></td>
                </tr><?php
            }
        }
        ?>
    </table>
</div>
<a href="./addBook.php">Add book</a>
</body>
