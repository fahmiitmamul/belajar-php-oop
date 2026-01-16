<?php

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = "Eko";
$student1->name = "Eko";
$student1->value = 10;
$student1->setSample('XXX');

var_dump($student1);