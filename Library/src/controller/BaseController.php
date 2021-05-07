<?php

namespace obb\controller;

use obb\module;

class BaseController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new module\DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllBook()
    {
        $sql = "SELECT * FROM Books";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function getAllStudent()
    {
        $sql = "SELECT * FROM Students";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function addStudent($name,$age,$class){
        $sql="INSERT INTO Students VALUE(null,'$name','$age','$class')";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function deleteStudent($id){
        $sql = "DELETE FROM Students WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function getStudentById($id){
        $sql="SELECT * FROM Students WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->fetch();
    }

    public function updateStudent($id,$name,$age,$class){
        $sql = "UPDATE Students SET Name='$name', Age='$age', Class='$class' WHERE id='$id' ";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

}