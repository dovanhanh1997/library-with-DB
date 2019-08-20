<?php


function openConn(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "dovanHanh1997";
    $db = "libraries";

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
    return $conn;
}

function closeConn($conn){
    $conn->close();
}
