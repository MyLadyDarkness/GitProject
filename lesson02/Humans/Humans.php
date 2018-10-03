<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 03.10.2018
 * Time: 1:16
 */

namespace lesson02;

//require_once ('Humans.php');
//require_once ('H:\Работа\GitProjects\lesson02\Humans\Student.php');
require_once ('Student.php');
require_once ('Employee.php');

/**
 * Class Humans
 * @package lesson02
 */
class Humans
{
    public $Fio;
    public $Age;

    function __construct()
    {

    }

    /**
     * @return mixed
     */
    function getFio()
    {
        return $this->Fio;
    }

    /**
     * @return mixed
     */
    function getAge()
    {
        return $this->Age;
    }

    /**
     * @param $fio
     */
    function setFio($fio)
    {
        $this->Fio = $fio;
    }

    /**
     * @param $age
     */
    function setAge($age)
    {
        $this->Age = $age;
    }
}

print_r("----------------------CLASS HUMANS!-------------------");
$objHuman = new Humans();
$objHuman->setFio("Vasya Puzov");
$objHuman->setAge(22);

$objHuman2 = new Humans();
$objHuman2->setFio("Vova Zarovv");
$objHuman2->setAge(31);

print_r($objHuman);

print_r($objHuman2->getFio(). " ");
print_r($objHuman2->getAge());
