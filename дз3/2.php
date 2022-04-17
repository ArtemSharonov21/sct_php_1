<?php
$pg1 = '../дз3/1.php';
$pg2 = '../дз3/2.php';
$pg3 = '../дз3/3.php';
$page = 2;
$a = 12;
$b = -3;
$c = 0;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .first{
            font-weight: <?php if ($page == 1) : ?> bold <?php endif; ?>
        }
        .second{
            font-weight: <?php if ($page == 2) : ?> bold <?php endif; ?>
        }
        .third{
            font-weight: <?php if ($page == 3) : ?> bold <?php endif; ?>
        }
    </style>
</head>
<body>
<ul>
    <li class="first"><a href="<?php echo $pg1 ?>">Первая</a></li>
    <li class="second"><a href="<?php echo $pg2 ?>">Вторая</a></li>
    <li class="third"><a href="<?php echo $pg3 ?>">Третья</a></li>
</ul>
<?php
if ($a > $b && $b > $c){
    echo "$c , $b , $a";
} elseif($a > $c && $c > $b) {
    echo "$b , $c , $a";
} elseif($b > $a && $a > $c) {
    echo "$c , $a , $b";
} elseif($b > $c && $c > $a) {
    echo "$a , $c , $b";
} elseif($c > $b && $b > $a) {
    echo "$a , $b , $c";
} else{
    echo "$b , $a , $c";
}
?>
</body>
</html>
