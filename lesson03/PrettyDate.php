<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 08.10.2018
 * Time: 8:42
 */

//------------   1.1   -----------------------------------------------------

$string_date = '2018-09-17 14:05:59';

$str_to_date = new DateTime($string_date);
$final_date = $str_to_date->format('l jS \of F Y H:i:s');
print_r($final_date);