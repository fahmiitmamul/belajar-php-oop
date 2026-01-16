<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "Eko";
$student1->name = "Eko";
$student1->value = 10;
$student1->setSample('XXX');

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual clone
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;