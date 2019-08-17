<?php
include_once '/var/www/html/module2/libraries-with-DB/database/database.php';

class Libraries
{
    public function addCategory($conn,$data){
        if (mysqli_query($conn,$data)){
            echo "Add Category successfully";
        }else{
            echo "Error";
        }
    }
}