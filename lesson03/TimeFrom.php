<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 08.10.2018
 * Time: 9:16
 */

//------------   1.2   -----------------------------------------------------

$string_date = '1988-08-19 07:05:59';

$str_to_date = new DateTime($string_date);
$curr_date = new DateTime(date("Y-m-d H:i:s"));

//print_r("TIME: -------" . date("Y-m-d H:i:s") . "\n");

$final_date = $str_to_date->diff($curr_date);

$allmonth = $final_date->y * 12 + $final_date->m;
$allhours = 24 * (int)$final_date->format('%a') + $final_date->h;
$allminutes = 60 * $allhours + $final_date->i;
$allseconds = 60 * $allminutes + $final_date->s;

print_r($final_date->format('%y лет' . "\n" . $allmonth . ' месяцев' . "\n" . '%a дней' . "\n" . $allhours . ' чаосв' . "\n" . $allminutes . ' минут' . "\n" . $allseconds . ' секунд'));
