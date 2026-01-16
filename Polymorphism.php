<?php

require_once 'data/Programmer.php';

$company = new Company();

$company->programmer = new Programmer("Eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Joko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Itmamul");
var_dump($company);

sayHelloProgrammer(new Programmer("Eko"));
sayHelloProgrammer(new BackendProgrammer("Joko"));
sayHelloProgrammer(new FrontendProgrammer("Itmamul"));
