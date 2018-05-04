<?php
/**
 * Created by PhpStorm.
 * User: nadiia
 * Date: 25.04.18
 * Time: 18:04
 */

$a = 5;
echo "A = $a <br>";

echo "Получить тип gettype(var) : " . gettype($a) ."<br>";

echo "Проверка на int is_int(var): " . is_int($a). '<br>';
$var = "10";
echo "Сравнение строки и числа: ";
if($var == 10){
    echo true . '<br>';
}
echo "Преобразование в bool: " . (bool) $a . '<br>';
echo "Преобразование в string: " . (string) $a . '<br>';
echo "Преобразование в array: ";
print_r ((array) $a) . '<br>';