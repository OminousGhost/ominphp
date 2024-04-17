<?php

// (Задание 8.1)

// http://127.0.0.1:8080/php/index-8.php?name=Leonid&age=19&gender=Man

// $name = $_GET['name'];
// $age = $_GET['age'];
// $gender = $_GET['gender'];
// echo "Здравствуйте, $name, Вы указали данные: Возраст $age и Пол $gender";

// (Задание 8.2)

// http://127.0.0.1:8080/php/index-8.php?num1=36&num2=12&num3=2

// $number1 = $_GET['num1'];
// $number2 = $_GET['num2'];
// $number3 = $_GET['num3'];

// $min = min($number1, $number2, $number3);
// $max = max($number1, $number2, $number3);

// echo "Минимальное число: " . $min . "<br>";
// echo "Максимальное число: " . $max;

// (Задание 8.3)

//http://127.0.0.1:8080/php/index-8.php?text=I-lave-yau!

if (isset($_GET['text'])) {
    $input_text = $_GET['text'];
    $output_text = str_replace(['a', 'k'], ['о', 'n'], $input_text);
    echo "<p>Исходное слово: $input_text</p>";
    echo "<p>Измененное слово: $output_text</p>";
}
