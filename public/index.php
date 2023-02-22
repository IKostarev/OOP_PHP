<?php

require_once ('./vendor/autoload.php');

// $worker = new App\Worker("It's name", 10, [0, 2, 8, 8]);
// $worker->work();

$visitor = new App\Visitor();
$visitor->visit();

$develop = new App\Developer("ilya", 16, [8, 8, 8]);
$develop->work();

$develop->setPosition("developer");
var_dump($develop->getPosition());

$develop->rest();

$salary = \App\Salary::count($develop->getHours());
var_dump($salary);

var_dump(\App\Salary::$totalHours);

$salaryObj = new \App\Salary();
var_dump($salaryObj::$totalHours);