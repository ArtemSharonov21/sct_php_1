<?php

/**
 * Функция, возвращающая количество вызовов
 */
$x = 0;
function culc() {
    global $x;
    $x = $x + 1;
    return $x;
}
culc();
culc();
culc();
echo $x;
