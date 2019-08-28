<?php
include_once 'model/database/DBConnect.php';
include_once 'model/database/DBStudent.php';
include_once 'model/class/Student.php';

class C_Student
{
    public $DBStudent;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBStudent = new DBStudent($connection->connect());
    }

    public function create()
    {
        include 'view/student/add.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $student = new Student($name, $pass, $email);
            $this->DBStudent->add($student);
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $image = $_POST['image'];
            $blackHistory = $_POST['blackHistory'];
            $id = $_POST['id'];

            $student = new Student($name, $pass, $email);
            $this->DBStudent->update($id, $student);
            header('location: index.php?page=students');
        } else {
            include 'view/student/update.php';

        }
    }

    public function studentsList()
    {
        $students = $this->DBStudent->getStudents();
        include 'view/student/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'view/student/delete.php';
        } else {
            $studentNumber = $_POST['id'];
            $student = $this->DBStudent->getStudent($studentNumber);
            $this->DBStudent->delete($student);
            header('location: index.php?page=students');
        }

    }

    public function login()
    {
        session_start();
        $_SESSION['status_login'] = false;
        include 'view/login.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];

            $students = $this->DBStudent->getStudents();
            foreach ($students as $student) {
                if ($_SESSION['name'] == $student->name) {
                    if ($_SESSION['pass'] == $student->pass) {
                        $_SESSION['status_login'] = true;
                    }
                }
            }
            $this->loginChecked();
        }
    }

    public function loginChecked()
    {
        if ($_SESSION['status_login']) {
            header('location: view/loginSuccess.php');
        } else {
            echo 'Error NAME or PASSWORD';
        }
    }
}

