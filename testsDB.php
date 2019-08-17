<?php
include_once "database.php";

$conn = openConn();
var_dump($conn);
if ($conn->connect_error == null){
    echo "Successfully";
}
else{
    echo $conn->connect_error;
}
echo '<br>';

$sql = "INSERT INTO books(bookName, loan, exist, total)
        VALUES ('Nudge','4','5','9')";
if (mysqli_query($conn,$sql)){
    echo "ADD DATA SUCCESS";
}else{
    echo "ERROR";
}