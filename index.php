<?php
session_start();
include_once 'controller/C_Student.php';
include_once 'controller/C_Category.php';

if ($_SESSION['status_login'] != true) {
    $C_Student = new C_Student();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case 'add':
            $C_Student->create();
            break;
        default:
            $C_Student->login();
            break;
    }
}
if ($_SESSION['status_login']) {
    $C_Category = new C_Category();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case 'add':
            $C_Category->add();
            break;
        default:
            break;
    }
}