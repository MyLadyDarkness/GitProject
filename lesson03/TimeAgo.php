<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 08.10.2018
 * Time: 10:52
 */

//------------   1.3   -----------------------------------------------------
$string_date = '2018-10-08 12:47:00';

function TimeAgo($timeFrom)
{
    $str_to_date = new DateTime($timeFrom);
    $curr_date = new DateTime(date("Y-m-d H:i:s"));

    $final_date = $str_to_date->diff($curr_date);

    print_r($final_date->format('%y лет %m месяцев %d дней %h чаосв %i минут %s секунд' . "\n"));

    if ($final_date->y === 0 && $final_date->m === 0 && $final_date->d === 0 && $final_date->h === 0 && $final_date->i === 0)
        print_r('только что');

    if ($final_date->y === 0 && $final_date->m === 0 && $final_date->d === 0 && $final_date->h === 0 && $final_date->i >= 1)
        print_r($final_date->format('%i минут назад'));

    if ($final_date->y === 0 && $final_date->m === 0 && $final_date->d === 0 && $final_date->h >= 1)
        print_r($final_date->format('%h часов назад'));

    if ($final_date->y === 0 && $final_date->m === 0 && $final_date->d === 1)
        print_r($final_date->format('вчера'));

    if ($final_date->y === 0 && $final_date->m === 0 && $final_date->d > 1)
        print_r($final_date->format('%d дней назад'));

    if ($final_date->y === 0 && $final_date->m >= 1)
        print_r($final_date->format('%m месяцев назад'));

    if ($final_date->y >= 1)
        print_r($final_date->format('%y лет назад'));
}

TimeAgo($string_date);
