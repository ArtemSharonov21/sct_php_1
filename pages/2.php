<?php
$ph1 = '../img/ph-4.jpg';
$ph2 = '../img/ph-5.jpg';
$ph3 = '../img/ph-3.jpeg';
$ph4 = '../img/ph-1.png';
$ph5 = '../img/ph-2.jpg';
$title = 'Название';
$pg1 = '../pages/1.php';
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
    <li><a href="<?php echo $pg1 ?>">Первая</a></li>
    <li><a href="<?php echo $pg3 ?>">Index</a></li>
</ul>
<img src="<?php echo $ph1 ?>" alt="">
<img src="<?php echo $ph2 ?>" alt="">
<img src="<?php echo $ph3 ?>" alt="">
<img src="<?php echo $ph4 ?>" alt="">
<img src="<?php echo $ph5 ?>" alt="">

</body>
</html>