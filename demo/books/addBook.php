<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
$cateNumber = array();
$libraries = new Libraries(openConn());
$sql = "SELECT cateNumber, cateName FROM categorys;";

$libraries->query($sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookName = "'" . $_POST['bookName'] . "'";
    $bookExist = $_POST['bookExist'];
    $bookLoaned = $_POST['bookLoaned'];
    $category = $_POST['category'];
    $total = $bookExist + $bookLoaned;

    $sql = "INSERT INTO books (bookName,loan,exist,total,cateNumber) VALUES (" . $bookName . ",$bookLoaned,$bookExist,$total,$category)";
    $libraries->query($sql);
    header("location: ./addBook.php");
}


?>


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
<h3> Create Book</h3>
<div>
    <form action="" method="post">
        <label for="">Book name</label>
        <label>
            <input type="text" name="bookName">
        </label><br> <label for="">Book Exist</label>
        <label>
            <input type="text" name="bookExist">
        </label><br> <label for="">Book loaned</label>
        <label>
            <input type="text" name="bookLoaned">
        </label><br>
        <label for="">Category</label>
        <select name="category" id=""><?php
            if ($libraries->isNumRowsNotEmpty()) {
                while ($row = $libraries->result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['cateNumber']; ?>"><?php echo $row['cateName'];
                        ?></option>
                <?php }
            }
            ?>

        </select>
        <button type="submit">Create</button>
    </form>
</div>
<?php
?>
</body>
</html>