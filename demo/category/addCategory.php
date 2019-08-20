<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
$libraries = new Libraries(openConn());
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cateName = "'" . $_POST['cateName'] . "'";
    $bookExist = $_POST['bookExist'];
    $bookLoaned = $_POST['bookLoaned'];

    $mysql = "INSERT INTO categorys (cateName, bookExist,loaned) VALUES (" . $cateName . "," . $bookExist . "," . $bookLoaned . ");";
    $libraries->addCategory($mysql);

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>LIBRARIES MANAGER</h1><br>
    <h2><a href="../index.php">Home</a>
        |Book|Reader|Borrow Books|Categories</h2>
</head>
<body>
<h3> Create Categories</h3>
<div>
    <form action="" method="post">
        <label for="">Category name</label>
        <label>
            <input type="text" name="cateName">
        </label><br> <label for="">Book Exist</label>
        <label>
            <input type="text" name="bookExist">
        </label><br> <label for="">Book loaned</label>
        <label>
            <input type="text" name="bookLoaned">
        </label><br>
        <button type="submit">Create</button>
    </form>
</div>
</body>
</html>