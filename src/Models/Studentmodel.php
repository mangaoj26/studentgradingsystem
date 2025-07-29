<?php

namespace Mangao\Gs\Models;

use Mangao\Gs\Core\Crud;
use Mangao\Gs\Core\Database;


class StudentModel extends Database implements Crud{

    public int $id;
    public string $name;
    public string $course;
    public int $year_leve;
    public string $section;



    public function __construct(){
        parent::__construct();
        $this->id = 0;
        $this->name = "";
        $this->course = "";
        $this->year_level = 0;
        $this->section = "";

    }

    

    public function create(){
        $query = $this->conn->prepare ("INSERT INTO `student`(`id`, `name`,`course`,`year_level`,`section`) VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
        if ($query->execute()){
            echo "student Inserted";
        }
    }

    public function read(){
        try {
            $sql = "SELECT * FROM student"; 
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);


        } catch (\Throwable $th){
            echo $th->GetMessage();
            
        }

    }
    public function update($id){
        $this->id=$id;
        $query = $this->conn->prepare("UPDATE `student` SET `id`=' $this->id',`name'=`$this->name',`course`='$this->course',`year_level`,'$this->year_level',`section`='$this->section'WHERE 0 ");
        if($query->execute()){
            echo "student updated successfully\n";
        }else{
            echo "invalid id";
        }

    }
    public function delete($id){
        $this->id=$id;
        $query = $this->conn->prepare("DELETE FROM 'student'WHERE id = $this->id");
        if($query->execute()){
            echo "student deleted";
        }

    }
}

