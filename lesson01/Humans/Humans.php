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
//require_once ('Student.php');
//require_once ('Employee.php');

/**
 * Class Humans
 * @package lesson02
 */
class Humans
{
    public $Fio;
    public $Age;
    public static $count = 0;

    function __construct($fio, $age)
    {
        $this->Fio = $fio;
        $this->Age = $age;
        self::$count++;
    }

    /**
     * @return string
     */
    function getFio()
    {
        return $this->Fio;
    }

    /**
     * @return string
     */
    function getAge()
    {
        return $this->Age;
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
$objHuman = new Humans("Vasya Puzov", 22);
//$objHuman->setFio("Vasya Puzov");
//$objHuman->setAge(22);

$objHuman2 = new Humans("Vova Zarovv", 31);
//$objHuman2->setFio("Vova Zarovv");
//$objHuman2->setAge(31);

$objHuman3 = new Humans("Yuriy Egorov", 18);
//$objHuman3->setFio("Yuriy Egorov");
//$objHuman3->setAge(18);

print_r($objHuman);
print_r($objHuman2);
print_r($objHuman3);

print_r("------COUNT------ " . $objHuman::$count . "\n");