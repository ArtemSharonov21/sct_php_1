<?php
$pg1 = '../дз2/1.php';
$pg2 = '../дз2/2.php';
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
    <li><a href="<?php echo $pg2 ?>">Вторая</a></li>
    <li><a href="<?php echo $pg_ind ?>">Index</a></li>
</ul>
<?php
$a = 23;
$b = 7;
echo 'Целочисленное деление 23 на 7 = ' . $a / $b ;
echo '<br>Остаток от деления 23 на 7 = ' . $a % $b ;

?>
</body>
</html>
