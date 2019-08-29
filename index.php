<?php
session_start();
include_once 'controller/C_Student.php';
include_once 'controller/C_Category.php';
include_once 'controller/C_Book.php';
include_once 'controller/C_Order.php';

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
                $students = isset($_REQUEST['students']) ? $_REQUEST['students'] : null;
                switch ($students) {
                    case 'update':
                        $C_Student->update();
                        break;
                    case 'create':
                        $C_Student->create();
                        break;
                    case'delete':
                        $C_Student->delete();
                        break;
                    default:
                        $C_Student->studentsList();
                        break;

                }
            } else {
                echo "<h1>You have not Permission</h1>";
            }
            break;
        case 'books':
            $C_Book = new C_Book();
            $books = isset($_REQUEST['books']) ? $_REQUEST['books'] : null;
            switch ($books) {
                case 'delete':
                    $C_Book->delete();
                    break;
                case 'update':
                    $C_Book->update();
                    break;
                case 'add':
                    $C_Book->add();
                    break;
                default:
                    $C_Book->render();
                    break;
            }
            break;
        case 'orders':
            $C_Order = new C_Order();
            $orders = isset($_REQUEST['orders']) ? $_REQUEST['orders'] : null;
            switch ($orders) {
                default:
                    $C_Order->getList();
            }
            break;
        default:
            header('location: view/loginSuccess.php');
            break;
    }
}
