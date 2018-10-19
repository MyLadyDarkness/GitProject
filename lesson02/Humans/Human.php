<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 03.10.2018
 * Time: 1:16
 */

namespace lesson02;

//require_once ('Human.php);
//require_once ('H:\Работа\GitProjects\lesson02\Human\Student.php');
//require_once ('Student.php');
//require_once ('Employee.php');

/**
 * Class Human
 * @package lesson02
 */
class Human
{
    public $fio;
    public $age;
    public static $count = 0;

    function __construct($fio, $age)
    {
        $this->fio = $fio;
        $this->age = $age;
        self::$count++;
    }

    /**
     * @return string
     */
    function getFio()
    {
        return $this->fio;
    }

    /**
     * @return string
     */
    function getAge()
    {
        return $this->age;
    }

    /**
     * @param $fio
     */
/*    function setFio($fio)
    {
        $this->Fio = $fio;
    }
*/
    /**
     * @param $age
     */
/*    function setAge($age)
    {
        $this->Age = $age;
    }
*/
    /*public function __set($name, $value)
    {
        //echo 'set' . PHP_EOL;
        $this->attributes[$name] = $value;
    }*/

}

print_r("----------------------CLASS HUMANS!------------------- \n");
$objHuman = new Human("Vasya Puzov", 22);
//$objHuman->setFio("Vasya Puzov");
//$objHuman->setAge(22);

$objHuman2 = new Human("Vova Zarovv", 31);
//$objHuman2->setFio("Vova Zarovv");
//$objHuman2->setAge(31);

$objHuman3 = new Human("Yuriy Egorov", 18);
//$objHuman3->setFio("Yuriy Egorov");
//$objHuman3->setAge(18);

print_r($objHuman);
print_r($objHuman2);
print_r($objHuman3);

print_r("------COUNT------ " . $objHuman::$count . "\n");