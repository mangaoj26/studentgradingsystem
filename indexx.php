<?php

use Mangao\Gs\Models\StudentModel;

require 'vendor\autoload.php';

$student = new StudentModel();
//$ListOfStudents = $Student->read();
//print_r($ListOfStudents);
$student->name ="Jack Sparrow";
$student->course = "BSIT";
$student->id = 56543;
$student->year_level = 2;
$student->section = "D";

$student->create();


