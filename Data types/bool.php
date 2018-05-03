<?php
/**
 * Created by PhpStorm.
 * User: nadiia
 * Date: 25.04.18
 * Time: 18:35
 */

$a = true;
echo "A = $a <br>";
$b = false;
echo "B = $b <br>";

echo "Получить тип gettype(var) : " . gettype($a) ."<br>";

echo "Проверка на bool is_bool(var): " . is_bool($a). '<br>';
$var = "1";
echo "Сравнение строки и типа bool: ";
if($var == true){
    echo true . '<br>';
}
echo "Преобразование в int: " . (int) $a . '<br>';
echo "Преобразование в float: " . (float) $a . '<br>';
echo "Преобразование в string: " . (string) $a . '<br>';
echo "Преобразование в array: ";
print_r ((array) $a) . '<br>';