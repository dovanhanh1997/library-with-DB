<?php
include_once '/var/www/html/module2/libraries-with-DB/database/database.php';

class Libraries
{
    public $conn;
    public $result;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function addCategory($data)
    {
        if ($this->result = mysqli_query($this->conn, $data)) {
            echo "Add Category successfully";
        } else {
            echo "Error";
        }
    }

    public function updateCategory($data)
    {
        if (mysqli_query($this->conn, $data)) {
            echo "Update Category successfully";
        } else {
            echo "Error";
        }
    }

    public function isNumRowsNotEmpty(){
        if ($this->result->num_rows > 0){
            return true;
        }
        return false;
    }

    public function query($data)
    {
        $this->result = $this->conn->query($data);
    }
}