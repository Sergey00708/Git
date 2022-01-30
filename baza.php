<?php

$name = $_POST['name'];
$pass = $_POST['password'];

if ($name == 'Сергей' or $name == 'Вадим') {
    echo "Ваше имя: $name </br>";
    echo "Ваш пароль: $pass";
} else {
    echo 'Вы не Сергей и не Вадим';
}
echo "</br>";

if (isset($_POST["bot"])) {
    echo 'Вы не бот';
} else {
    echo 'Вы бот';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="registration.html"><button type="submit">Назад</button></form>
</body>

</html>