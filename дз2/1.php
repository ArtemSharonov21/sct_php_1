<?php
$pg2 = '../дз2/2.php';
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
    <li><a href="<?php echo $pg2 ?>">Вторая</a></li>
    <li><a href="<?php echo $pg2 ?>">Третья</a></li>
    <li><a href="<?php echo $pg_ind ?>">Index</a></li>
</ul>
<?php
$a = 10;
$b = 7;
$sum = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$division = $a / $b;
$pow = $a ** $b;
echo "<br>1) $a + $b = " . $sum;
echo "<br>2) $a - $b = " . $subtraction;
echo "<br>3) $a * $b = " . $multiplication;
echo "<br>1) $a / $b = " . $division;
echo "<br>1) $a ^ $b = " . $pow;

?>
</body>
</html>
