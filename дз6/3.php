<?php

/**
 * Функция, увеливающее число градусов
 * @param $degree_up - возвращает число, после увеличния градусов
 * @param float $sum - число, на которое увеличиваем
 * @return void
 */
function up(&$degree_up, float $sum) {
    $degree_up = $degree_up + $sum;
}

/**
 * Функция, уменьшающая число градусов
 * @param $degree_down - возвращает число, после уменьшения градусов
 * @param float $difference - число, на которое уменьшаем
 * @return void
 */
function down(&$degree_down, float $difference) {
    $degree_down = $degree_down - $difference;
}
$degree = 15;
up($degree, 2);
down($degree, 2);
down($degree, 2);
up($degree, 2);
up($degree, 2);
echo $degree;

