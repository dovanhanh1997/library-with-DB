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
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case 'category':
            $C_Category = new C_Category();
            $category = isset($_REQUEST['category']) ? $_REQUEST['category'] : null;
            switch ($category) {
                case 'add':
                    $C_Category->add();
                    break;
                case 'edit':
                    $C_Category->edit();
                    break;
                case 'delete':
                    $C_Category->delete();
                    break;
                default:
                    $C_Category->render();
            }
            break;
        case 'students':
            $C_Student = new C_Student();
            if ($_SESSION['name'] == 'admin') {
                $C_Student->studentsList();
            } else {
                echo "<h1>You have not Permission</h1>";
            }
            break;
        default:
            header('location: view/loginSuccess.php');
            break;
    }
}
