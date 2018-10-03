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
class Employee //extends Humans
{
    //private $Oklad;
    private $Date;
    private $Sum;
    protected $ArrMoney;
    //private $arr;
    function __construct()
    {
        //$Oklad = 50000;
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
     * @param int $sum
     * @param string $date
     *
     * @return array
     */
    function addMoney(int $sum, string $date)
    {
        print_r("me call ");
        if ($sum === null)
            $sum = 50000;//$this->Oklad;


        if (empty($arrMoney))
        {
            //$arr = [$this->Sum = $sum, $this->Date = $date];

            /* @var arrMoney Sum in Date [][]*/
            $arrMoney = [$this->Sum = $sum, $this->Date = $date]; //$arr;
        }

        //$arr = [$this->Sum = $sum, $this->Date = $date];
        array_push($arrMoney, [$this->Sum = $sum, $this->Date = $date]); //$arr);


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

print_r("----------------------CLASS EMPLOYEE!-------------------");

$objEmployee = new Employee();
$objEmployee->addMoney(10000, "17/09/2018");
$objEmployee->addMoney(null, "19/09/2018");

print_r($objEmployee->getMoney());