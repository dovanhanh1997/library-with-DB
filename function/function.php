<?php
include_once '/var/www/html/module2/libraries-with-DB/function/Libraries.php';
include_once '/var/www/html/module2/libraries-with-DB/database/database.php';

function addCategory($conn,$data){
    $libraries = new Libraries();
    $libraries->addCategory($conn,$data);
}