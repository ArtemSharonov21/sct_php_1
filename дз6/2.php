<?php

/**
 * Функция, возвращающая количество вызовов
 */
function counter() {
    static $a = 0;
    $a = $a + 1;
    echo $a;
    //return $a;
}
counter();
counter();
counter();

