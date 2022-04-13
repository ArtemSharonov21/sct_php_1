<?php
$title = 'Название';
$pg1 = 'pages/1.php';
$pg2 = 'pages/2.php';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
<h2><?php echo $title ?></h2>
<ul>
    <li><a href="<?php echo $pg1 ?>">Первая</a></li>
    <li><a href="<?php echo $pg2 ?>">Вторая</a></li>
</ul>
</body>
</html>