<?php
$x1 = rand(-100, 100);
$x2 = rand(-100, 100);
echo "$x1  $x2";
if ($x1 >= 0 && $x2 >= 0){
    echo '<br>Обе переменные положительные';
}elseif ($x1 < 0 && $x2 < 0){
    echo '<br>Обе переменные отрицательные';
}elseif (($x1 >= 0 && $x2 < 0) || ($x2 >= 0 && $x1 < 0)){
    echo '<br>Переменные имеют разные знаки';
}