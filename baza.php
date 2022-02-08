<?php

require_once'dbconnect.php';

$name = $_POST['name'];
$pass = $_POST['password'];


$sql = 'INSERT INTO people(name, password) VALUES(:name, :password)';
$query = $pdo->prepare($sql);
$query->execute(['name' => $name, 'password' => $pass]);

if (isset($_POST['name'])) {
    echo "Ваше имя: $name </br>";
}if (isset($_POST['password'])) {
    echo "Ваш пароль: $pass";
}else{
    echo 'не введены данные';
}
echo "</br>";

/*$query1 = $pdo->query('SELECT * FROM `people`');
while($row = $query1->fetch(PDO::FETCH_OBJ)){
    echo "Ваше имя: $row->name </br>";
    echo "Ваш пароль: $row->password </br>";
}*/

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