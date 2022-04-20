<?php

function data(string $name, $age = null,  $address = null): string
{
    if ($address == null){
        $a = "Имя : $name <br> Возраст: $age";
    } elseif ($age == null){
        $a = "Имя : $name <br> Адрес: $address";
    }else{
        $a = "Имя : $name <br> Адрес: $address <br> Возраст: $age";
    }
    return $a;
}

echo data('Artem', '20');
