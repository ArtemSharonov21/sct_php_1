<?php
$name = "Artem";
$address = "Astrakhan, Botvina street, 14A";
$age = 20;
$gender = "male";
$title = 'Название';
$pg2 = '../pages/2.php';
$pg3 = '../index.php';

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
    <li><a href="<?php echo $pg3 ?>">Index</a></li>
</ul>
<?php
echo 'Имя: ' . $name . '<br>Адрес: ' . $address . '<br>Возарст: ' . $age . '<br>Пол: ' . $gender;

?>
</body>
</html>