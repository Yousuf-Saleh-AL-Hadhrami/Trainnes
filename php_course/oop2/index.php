<?php 

require_once './autoload.php';

use Students\Student;

$std1 = new Student();
$std1->setName("Yousuf");
echo $std1->getName();