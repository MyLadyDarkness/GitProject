<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 03.10.2018
 * Time: 9:20
 */

namespace lesson02;
require_once ('Humans.php');
//require_once ('H:\Работа\GitProjects\lesson02\Humans\Student.php');
//require_once ('Student.php');
//require_once ('Employee.php');


$objMan = new Humans();
$objMan->setFio("Petya Ivanov");
$objMan->setAge(23);

print_r("\n ---------------INDEX----------------- ");
print_r("\n ---------------HUMAN----------------- \n");
print_r($objMan);

$objStudentBotan = new \Student();
$objStudentBotan->setKurs(2);
$objStudentBotan->setForm('zaochnaya');
$objStudentBotan->setRating(4);
$objStudentBotan->setRating(5);

print_r("\n ---------------INDEX----------------- ");
print_r("\n ---------------STUDENT----------------- \n");
print_r($objStudentBotan);