<?php

require_once 'data/Person.php';

$person = new Person();
$person->name = "Eko";
$person->address = "Subang";
$person->country = "Indonesia";

var_dump($person);

$person2 = new Person();
$person2->name = "Itmamul";
$person2->address = null;
$person2->country = "Indonesia";

var_dump($person2);

echo "Name: $person->name" . PHP_EOL;
echo "Name: $person->address" . PHP_EOL;
echo "Name: $person->country" . PHP_EOL;

$person2->name = [];