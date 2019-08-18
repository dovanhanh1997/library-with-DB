<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
$libraries = new Libraries(openConn());
$idUpdate = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $newName = "'".$_POST['newName']."'";
    $newExist = $_POST['newExist'];
    $newLoaned = $_POST['newLoaned'];

    $sql = "UPDATE categorys SET cateName = $newName, bookExist = $newExist, loaned = $newLoaned WHERE cateNumber = $idUpdate ;";
    $libraries->query($sql);
}

$sql = "SELECT cateName FROM categorys WHERE cateNumber =$idUpdate";
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
    <h2><a href="../index.php">Home</a>|Book|Reader|Borrow Books|Categories</h2>
</head>
<body>
<h3>Edit Categories</h3>
<div>
    <form action="" method="post">
        Category : <?php
        if ($libraries->isNumRowsNotEmpty()){
            while ($row = $libraries->result->fetch_assoc()){
                echo $row["cateName"];
            }
        }
        ?>
        <h4>Update Data</h4>
        New Name :<input type="text" name="newName"><br>
        Book Exist :<input type="text" name="newExist"><br>
        Book Loaned :<input type="text" name="newLoaned"><br>
        <button type="submit">Update</button>

    </form>

</div>
</body>
</html>