<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
$conn = openConn();
$sql = "SELECT * FROM categorys";
$result = $conn->query($sql);
$result_one = mysqli_query($conn,$sql);

function render($column)
{
    global $conn, $result;


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row[$column];
        }
    }
}

render("cateNumber");echo '<br>';
var_dump($result);echo '<br>';
var_dump($result_one);?>



