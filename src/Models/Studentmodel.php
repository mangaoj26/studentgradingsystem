<?php

namespace Mangao\Gs\Model;

use Mangao\Gs\core\Crud;
use Mangao\Gs\core\Database;


class StudentModel extends Database implements Crud{
    public int $id;
    public string $name;
    public string $course;
    public int $year_leve;
    public string $section;



    public function create(){

    }

    public function __construct(){
        parent::__construct();
        $this->id = 0;
        $this->name = "";
        $this->course = "";
        $this->year_level = 0;
        $this->section = "";
    }

    public function read(){
        try {
            $sql = "SELECT * FROM students"; 
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);


        } catch (\Throwable $th){
            echo $th->GetMessage();
            
        }

    }
    public function update($id){

    }
    public function delete($id){

    }
}

