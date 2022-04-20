<?php

function minimum(int $first, int $second , $third = null)
{
    if ($first != int || $second != int || $third != int){
        $first = (int) $first;
        $second = (int) $second;
        $third = (int) $third;
    }
    if ($first < $second && $first < $third){
        $a = "Число $first - наименьшее";
    }elseif ($second < $first && $second < $third){
        $a = "Число $second - наименьшее";
    }elseif ($third < $first && $third < $second){
        $a = "Число $third - наименьшее";
    }
    return $a;
}

echo minimum('-10', 10, -3);
