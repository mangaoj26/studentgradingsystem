<?php

use Mangao\Gs\Model\StudentModel;

require 'vendor\autoload.php';

$Student = new StudentModel;

$ListOfStudents = $Student->read();

print_r($ListOfStudents);
