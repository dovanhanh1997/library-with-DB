<?php

class DBStudent
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function add($student)
    {
        $sqlStm = "INSERT INTO students (name,pass,email) VALUES (:name,:pass,:email)";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':name', $student->name);
        $query->bindParam(':pass', $student->pass);
        $query->bindParam(':email', $student->email);
        return $query->execute();
    }

    public function getStudents()
    {
        $sqlStm = "SELECT * FROM students;";
        $query = $this->connection->prepare($sqlStm);
        $query->execute();
        $result = $query->fetchAll();
        $students = [];
        foreach ($result as $row) {
            $student = new Student($row['name'], $row['pass'], $row['email']);
            $student->id = $row['studentNumber'];
            $students[] = $student;
        }
        return $students;
    }

    public function getStudent($id)
    {
        $student = null;
        $stmt = "SELECT * FROM students WHERE studentNumber = :studentNumber;";
        $query = $this->connection->prepare($stmt);
        $query->bindParam(':studentNumber',$id);
        $query->execute();
        $result = $query->fetchAll();
        foreach ($result as $row) {
            $student = new Student($row['name'], $row['pass'], $row['email']);
            $student->id = $row['studentNumber'];
        }
        return $student;
    }

    public function update($id, $student)
    {
        $sqlStm = "UPDATE students SET name=:name,pass=:pass,email=:email WHERE studentNumber=:studentNumber;";
        $query = $this->connection->prepare($sqlStm);
        $query->bindParam(':name', $student->name);
        $query->bindParam(':pass', $student->pass);
        $query->bindParam(':email', $student->email);
        $query->bindParam(':studentNumber', $id);
        $query->execute();
    }

    public function delete($student)
    {
        $stmt = "DELETE FROM students WHERE studentNumber = :studentNumber;";
        $query = $this->connection->prepare($stmt);
        $query->bindParam(':studentNumber', $student->id);
        $query->execute();
    }

}