<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 03.10.2018
 * Time: 1:17
 */

//require ('Humans.php');
//include_once ('H:\Работа\GitProjects\lesson02\Humans\Student.php');
//require_once ('Employee.php');

/**
 * Class Student
 */
class Student //extends Humans
{
    private $Form;
    private $Kurs;
    private $Rating;

    const FORM_OCHN = 'ochnaya';
    const FORM_ZAOCHN = 'zaochnaya';

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
        $this->Rating .= $rating . " " ;
    }
}

print_r("----------------------CLASS STUDENT!-------------------");

$objStudent = new Student;

$objStudent->setForm('ochnaya');
$objStudent->setKurs(3);
$objStudent->setRating(3);
$objStudent->setRating(5);
print_r($objStudent);