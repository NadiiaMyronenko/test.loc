<?php

$a = 5.75;
echo "A = $a <br>";
$b = 2.1e35;
echo "B = $b <br>";
$c = 2E-5;
echo "C = $c <br>";

echo "Получить тип gettype(var) : " . gettype($a) ."<br>";

echo "Проверка на float is_float(var): " . is_float($a). '<br>';
$var = "1.89";
echo "Сравнение строки и числа: ";
if($var == 1.89){
    echo true . '<br>';
}
echo "Преобразование в int: " . (int) $a . '<br>';
echo "Округление до целого: " . round($a) . '<br>';
echo "Округление в большую сторону: " . ceil($a) . '<br>';
echo "Округление в меньшую сторону: " . floor($a) . '<br>';
echo "Преобразование в bool: " . (bool) $a . '<br>';
echo "Преобразование в string: " . (string) $a . '<br>';
echo "Преобразование в array: ";
print_r ((array) $a) . '<br>';