<?php

require_once ('./vendor/autoload.php');

$worker = new App\Worker("It's name", 10, [0, 2, 8, 8]);
$worker->work();

$visitor = new App\Visitor();
$visitor->visit();