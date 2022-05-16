<?php
if (!empty($_GET['send'])) {
    if (isset($_GET)) {
        print("Имя: " . $_GET['name']);
        print("<br>Email: " . $_GET['email']);
        print("<br>Сообщение: " . $_GET['message']);
    }
}

?>

<form action="" method="get">
    <label for="lastName">Фамилия: </label>
    <input type="text" name="lastName" id="lastName">
    <br>
    <label for="name">Имя: </label>
    <input type="text" name="name" id="name">
    <br>
    <label for="patronymic">Отчество: </label>
    <input type="text" name="patronymic" id="patronymic">
    <br>
    <label for="gender">Пол: </label>
    <select name="gender">
        <option value="Мужчина">Мужчина</option>
        <option value="Женщина">Женщина</option>
    </select>
    <br>
    <label for="city">Город: </label>
    <select name="city">
        <option value="1">Астрахань</option>
        <option value="2">Москва</option>
        <option value="3">Краснодар</option>
        <option value="4">Сочи</option>
    </select>
    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email">
    <br>
    <input type="submit" name="send" value="Отправить">
</form>