<?php

class DBStudent
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function add($student){
        $sqlStm = "INSERT INTO students (name,pass,email) VALUES (:name,:pass,:email)";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':name',$student->name);
        $query->bindParam(':pass',$student->pass);
        $query->bindParam(':email',$student->email);
        return $query->execute();
    }
    
    public function getStudent(){
        $sqlStm = "SELECT * FROM students;";
        $query = $this->connection->prepare($sqlStm);
        $query->execute();
        $result = $query->fetchAll();
        $students = [];
        foreach ($result as $row) {
            $student = new Student($row['name'],$row['pass'],$row['email']);
            $student->id = $row['studentNumber'];
            $students[]=$student;
            }
        return $students;
    }
}