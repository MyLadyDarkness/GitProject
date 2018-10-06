<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 03.10.2018
 * Time: 1:17
 */

namespace lesson02;
require_once ('Humans.php');

//include_once ('H:\Работа\GitProjects\lesson02\Humans\Student.php');
//require_once ('Employee.php');

/**
 * Class Student
 */
class Student extends Humans
{
    public $Fio;
    public $Age;
    private $Form;
    private $Kurs;
    private $Rating;
    public static $count1 = 0;

    const FORM_OCHN = 'ochnaya';
    const FORM_ZAOCHN = 'zaochnaya';

    function __construct($fio, $age, $form, $kurs, $rating)
    {
        $this->Fio = $fio;
        $this->Age = $age;
        $this->Form = $form;
        $this->Kurs = $kurs;
        $this->Rating = $rating;
        self::$count++;
        self::$count1++;
    }

    function getForm()
    {
        return $this->Form;
    }

    function getKurs()
    {
        return $this->Kurs;
    }

    /**
     * @return mixed
     * возвращает все полученные оценки
     */
    function getRating()
    {
        return $this->Rating;
    }

    function setForm($form)
    {
    /*    if ($form === FORM_OCHN)
            $this->Form = $form;
        else
            if ($form === FORM_ZAOCHN)
                $this->Form = $form;
            else
                print_r('vozmognye znacheniya . FORM_OCHN .   . FORM_ZAOCHN');
    */
    $this->Form = $form;
    }

    /**
     * @param $kurs
     */
    function setKurs($kurs)
    {
        $this->Kurs = $kurs;
    }

    /**
     * @param $rating
     * на вход получаем оценку и каждую следующую
     * через пробел добавляем в тору оценок
     */
    function setRating($rating)
    {
        $this->Rating .= " " . $rating;
    }
}

print_r("----------------------CLASS STUDENT!------------------- \n");

$objStudent = new Student('Egor Kovalev', 26,Student::FORM_OCHN, 3, 3);

//$objStudent->setFio('Egor Kovalev');
//$objStudent->setAge(26);
//$objStudent->setForm(Student::FORM_OCHN);
//$objStudent->setKurs(3);
//$objStudent->setRating(3);
$objStudent->setRating(5);


$objStudent1 = new Student('Lenya Kuravvalev', 24,Student::FORM_ZAOCHN, 1, 4);

//$objStudent1->setFio('Lenya Kuravvalev');
//$objStudent1->setAge(24);
//$objStudent1->setForm(Student::FORM_ZAOCHN);
//$objStudent1->setKurs(1);
$objStudent1->setRating(4);
$objStudent1->setRating(5);

$objStudent2 = new Student('Yuriy Mironov', 21,Student::FORM_OCHN, 5, 2);;

//$objStudent2->setFio('Yuriy Mironov');
//$objStudent2->setAge(21);
//$objStudent2->setForm(Student::FORM_OCHN);
//$objStudent2->setKurs(5);
$objStudent2->setRating(4);
$objStudent2->setRating(3);
$objStudent2->setRating(5);


print_r($objStudent);
print_r($objStudent1);
print_r($objStudent2);

print_r("------COUNT with Numans------ " . $objStudent::$count . "\n");
print_r("------COUNT for Student------ " . $objStudent::$count1 . "\n");