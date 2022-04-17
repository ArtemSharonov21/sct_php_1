<?php
$pg1 = '../дз2/1.php';
$pg3 = '../дз2/3.php';
$pg_ind = '../дз2/index.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="<?php echo $pg1 ?>">Первая</a></li>
    <li><a href="<?php echo $pg3 ?>">Третья</a></li>
    <li><a href="<?php echo $pg_ind ?>">Index</a></li>
</ul>
<?php
$a = '456';
$a = (int) $a;
var_dump($a);
$b = '969294233720368754775807';
$b = (int) $b;
echo '<br>';
var_dump($b); //9223372036854775807 Диапазон допустимых для int значений — от -2147483648 до 2147483647.

?>
</body>
</html>