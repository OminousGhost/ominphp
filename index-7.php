<!-- 1 -->
<!DOCTYPE html>
<html>

<head>
    <title>Сравнение двух переменных</title>
</head>

<body>
    <?php

    $num1 = 45;
    $num2 = 76;

    if ($num1 > $num2) {
        echo "Большая переменная: $num1";
    } else {
        echo "Большая переменная: $num2";
    }
    ?>
</body>

</html>

<!-- 2 -->
<!DOCTYPE html>
<html>

<head>
    <title>Информация о числе</title>
</head>

<body>
    <?php

    $num = 44;

    if ($num > 0) {
        echo "Число $num - положительное";
    } elseif ($num < 0) {
        echo "Число $num - отрицательное";
    } else {
        echo "Число $num - равно 0";
    }
    ?>
</body>

</html>

<!-- 3 -->
<?php

// http://localhost:3000/index-7.php?login=admin&password=password

$login = $_GET['login'];
$password = $_GET['password'];

$expectedLogin = 'admin';
$expectedPassword = 'password';

if ($login == $expectedLogin && $password == $expectedPassword) {

    echo "Вход выполнен успешно!";
} else {

    echo "Неправильный логин или пароль!";
}
?>