<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
$libraries = new Libraries(openConn());

$sql = "SELECT * FROM categorys";
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
<h3>Categories List</h3>
<div>
    <table border="0" style="border-collapse: collapse; width: 100%; border: 1px solid navy;">
        <tr>
            <th>Code</th>
            <th>Category</th>
            <th>Update/Delete</th>
        </tr>
        <?php
        if ($libraries->isNumRowsNotEmpty()) {
        while ($row = $libraries->result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["cateNumber"]; ?></td>
            <td><?php echo $row["cateName"]; ?></td>
            <td>
                <a href="./category/updateCategory.php?id=<?php echo $row["cateNumber"] ?>">Update</a>
                <a href="./category/dropCategory.php?id=<?php echo $row["cateNumber"] ?>">Delete</a></td>
            <?php }
            }
            ?>
        </tr>
    </table>
</div>
<?php
?>
</body>
</html>