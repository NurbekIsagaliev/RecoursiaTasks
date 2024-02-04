<?php
/*Задача #6
Описать функцию timeToHMS($time), определяющую по времени $time (в секундах) содержащееся в нем 
количество часов, минут и секунд.
Пример: $time = 3070
00:51:10
*/
$time = 72575;

function timeToHMS($time)
{
        if ($time >= 0 and $time < 60) {

        $second = $time % 3600;
        if ($second >= 0 and $second < 10) {
            $second = '0' . $second;
        }
        $minute = '00';
        $hour = '00';
    } elseif ($time >= 60 and $time < 3600) {

        $second = $time % 60;
        if ($second >= 0 and $second < 10) {
            $second = '0' . $second;
        }
        $minute = intdiv($time, 60);
        if ($minute >= 1 and $minute < 10) {
            $minute = '0' . $minute;
        }
        $hour = '00';
    } elseif ($time >= 3600 and $time < 86400) {

        $second = ($time % 3600) % 60;
        if ($second >= 0 and $second < 10) {
            $second = '0' . $second;
        }
        $minute = intdiv(($time % 3600), 60);
        if ($minute >= 0 and $minute < 10) {
            $minute = '0' . $minute;
        }
        $hour = intdiv($time, 3600);
        if ($hour >= 1 and $hour < 10) {
            $hour = '0' . $hour;
        }
    }

    return $hour . ' : ' . $minute . ' : ' . $second;
}

echo timeToHMS($time);
