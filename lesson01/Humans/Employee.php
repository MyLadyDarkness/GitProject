<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 02.10.2018
 * Time: 19:28
 */

//require_once ('Humans.php');
//require_once ('H:\Работа\GitProjects\lesson02\Humans\Student.php');
//include_once ('Employee.php');

/**
 * Class Employee
 */
namespace lesson02;
require_once ('Humans.php');

class Employee extends Humans
{
    private $Date;
    private $Sum;
    protected $ArrMoney;

    public static $count1 = 0;

    function __construct()
    {
        //$this->Date = $date;
        //$this->Sum = $sum;
        self::$count++;
        self::$count1++;
    }

    /*    function getOklad()
        {
            return $this->Oklad;
        }

        function setOklad($oklad)
        {
            $this->Oklad = $oklad;
        }
    */

    /**
     *
     * @return array
     */
    function addMoney($sum, $date)
    {
        //$arrMoney = [[]];
        //print_r("me call ");
        if ($sum === null)
            $sum = 50000;//$this->Oklad;

        //$arrMoney = [[]];

       /* if (isset($arrMoney))
        {



            $arrMoney = [[$this->Sum = $sum, $this->Date = $date]]; //$arr;
            $this->ArrMoney = $arrMoney;

            print_r("If array is empty \n");
            print_r($arrMoney);

           // print_r("result \n");
           // print_r($this->ArrMoney);
            return;
        }

        else*/

        //var_export($arrMoney);
        //foreach ($arrMoney as $value)
            //print_r("--------------my arrmoney----------" . $value . " THE END " . "\n");
        //print_r("if empty " . $arrMoney . "\n");
        $arr = [$this->Sum = $sum, $this->Date = $date];

        //array_push($arrMoney, [[$this->Sum = $sum, $this->Date = $date]]); //$arr);

        $arrMoney = $arr; //$arr);

        //print_r("after array_push \n");
        //print_r($arrMoney);

        //$arrMoney[] = $this->Sum = $sum;//, $this->Date = $date];
        $this->ArrMoney[] = $arrMoney;
//        print_r($this->ArrMoney);
    }

    /**
     * @return mixed
     */
    function getMoney()
    {
        return $this->ArrMoney;
    }
}

print_r("----------------------CLASS EMPLOYEE!------------------- \n");

$objEmployee = new Employee(); //("17/09/2018", 10000);
$objEmployee->addMoney(10000, "17/09/2018");
$objEmployee->addMoney(null,"19/09/2018");
$objEmployee->Fio = "Ivan Vasilev";
$objEmployee->Age = 34;

$objEmployee1 = new Employee(); //("11/09/2018", null);
$objEmployee1->addMoney(null, "11/09/2018");
$objEmployee1->addMoney(5000,"29/09/2018");
$objEmployee1->Fio = "Fedor Vasilevskiy";
$objEmployee1->Age = 41;

$objEmployee2 = new Employee(); //("1/09/2018", 12000);
$objEmployee2->addMoney(1000, "5/09/2018");
$objEmployee2->addMoney(3000,"6/09/2018");
$objEmployee2->Fio = "Timur Belov";
$objEmployee2->Age = 25;


print_r($objEmployee);
print_r($objEmployee1);
print_r($objEmployee2);

print_r("------COUNT with Numans------ " . $objEmployee::$count . "\n");
print_r("------COUNT for Employee------ " . $objEmployee::$count1 . "\n");