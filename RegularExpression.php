<?php

$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i", 'Eko Kurniawan Khannedy', $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/test|test/i", '***', 'dasar lu test dan test');

var_dump($result);

$result =  preg_split("/[\s, -]/i", 'Eko Kurniawan Khannedy', 'Programmer Zaman Now000');

var_dump($result);