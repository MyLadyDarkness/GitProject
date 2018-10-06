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
require_once ('Student.php');
require_once ('Employee.php');


$objMan = new Humans("Petya Ivanov", 23);
//$objMan->setFio("Petya Ivanov");
//$objMan->setAge(23);

print_r("\n ---------------INDEX----------------- ");
print_r("\n ---------------HUMAN----------------- \n");
print_r($objMan);

$objStudentBotan = new Student('Egor Kovalev', 26,Student::FORM_OCHN, 3, 3);
/*$objStudentBotan = new \Student();
$objStudentBotan->setKurs(2);
$objStudentBotan->setForm('zaochnaya');
$objStudentBotan->setRating(4);
$objStudentBotan->setRating(5);
*/
print_r("\n ---------------INDEX----------------- ");
print_r("\n ---------------STUDENT----------------- \n");
print_r($objStudentBotan);

$objEmployee3 = new Employee(); //("1/09/2018", 12000);
$objEmployee3->addMoney(1000, "5/09/2018");
$objEmployee3->addMoney(3000,"6/09/2018");
$objEmployee3->Fio = "Timur Belov";
$objEmployee3->Age = 25;

print_r("\n ---------------INDEX----------------- ");
print_r("\n ---------------EMPLOYEE----------------- \n");
print_r($objEmployee3);