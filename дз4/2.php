<?php
$x1 = rand(-100, 100);
$x2 = rand(-100, 100);
$x3 = rand(-100, 100);

if ($x1 >= $x2 && $x2 >= $x3){
    echo "$x3  $x2  $x1";
}elseif($x1 > $x3 && $x3 > $x2){
    echo "$x2  $x3  $x1";
}elseif($x2 > $x1 && $x1 > $x3){
    echo "$x3  $x1  $x2";
}elseif($x2 > $x3 && $x3 > $x1){
    echo "$x1  $x3  $x2";
}elseif($x3 > $x2 && $x2 > $x1){
    echo "$x1  $x2  $x3";
}elseif($x3 > $x1 && $x1 > $x2){
    echo "$x2  $x1  $x3";
}




