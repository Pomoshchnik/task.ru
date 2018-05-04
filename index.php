<?php

$x = 3;         //Пользователь вводит число
$num1 = 1;      // Переменная 1
$num2 = 1;      // Переменная 2

function chNum(){
    global $x;
    global $num1;
    global $num2;

    while ($x){
        echo 'Число пользователя ' .$x. '<br>';
        echo 'Первая переменная = ' .$num1. '<br>';
        echo 'Вторая переменная = ' .$num2. '<br>';
        echo '<br>';

        if($num1 > $x){
            return 'Задуманное число не входит в числовой ряд' . '<br>';
        }

        elseif ($num1 === $x){
            return 'Задуманное число входит в числовой ряд' . '<br>';
        }

        else {
            $num3 = $num1;
            $num1 = $num1 + $num2;
            $num2 = $num3;
        }

    }
}

echo chNum();

?>



