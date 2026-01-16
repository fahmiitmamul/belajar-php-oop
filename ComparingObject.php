<?php

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = "Eko";
$student1->name = "Eko";
$student1->value = 10;

$student2 = new Student();
$student2->id = "Eko";
$student2->name = "Eko";
$student2->value = 10;

var_dump($student1 == $student2);
var_dump($student1 === $student2);