<?php
/**
 * Created by PhpStorm.
 * User: nadiia
 * Date: 26.04.18
 * Time: 15:03
 */
$arr = array(1, 2, 3, 4, 5);
print_r($arr);
echo '<br><br>';

echo '<table border="2" width="600" cellspacing="0">
    <caption>Функции для работы с массивами:</caption>
    <tr>
        <th>Название</th>
        <th>Действие</th>
        <th>Результат</th>
    </tr>
    <tr>
        <td>count(arr)</td>
        <td>Считает колличество элементов в массиве</td>
        <td>'.count($arr).'</td>
    </tr>
    <tr>
        <td>in_array(что искать, arr)</td>
        <td>Проверяет наличие элемента в массиве</td>
        <td>'.in_array(2, $arr).'</td>
    </tr>
    <tr>
        <td>array_sum(arr)</td>
        <td>Сумма элементов массива</td>
        <td>'.array_sum($arr).'</td>
    </tr>
    <tr>
        <td>array_product(arr)</td>
        <td>Произведение элементов массива</td>
        <td>'.array_product($arr).'</td>
    </tr>
    <tr>
        <td>array_merge(arr1, arr2, ...)</td>
        <td>Сливает несколько массивов в один</td>
        <td>'; print_r(array_merge(array(1, 2, 3), array('a','b', 'c'))); echo'</td>
    </tr>
    <tr>
        <td>array_slice(arr, элемент с которого начинать, [сколько], [сохранять ключи])</td>
        <td>Отрезает  и возвращает часть массива. Исходный массив при этом не изменяется</td>
        <td>'; print_r(array_slice($arr, 1, 3)); echo '</td>
    </tr>
    <tr>
        <td>array_splice(arr, откуда резать, [сколько],[вставить взамен])</td>
        <td>Отрезает и возвращает часть массива. Отрезанная часть исчезает из массива</td>
        <td>'; print_r(array_slice(array(1, 2, 3, 4, 5, 6), 1, 4)); echo '</td>
    </tr>
    <tr>
        <td>array_keys(arr)</td>
        <td>Массив ключей исходного массива</td>
        <td>'; print_r(array_keys($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_values(arr)</td>
        <td>Массив значений исходного массива</td>
        <td>'; print_r(array_values($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_combine(arrKeys, arrValues)</td>
        <td>Сливает два массива в один ассоциативный</td>
        <td>'; print_r(array_combine(['a', 'b', 'c'], [1, 2, 3])); echo '</td>
    </tr>
    <tr>
        <td>array_flip(arr)</td>
        <td>Меняет местами ключи и значения</td>
        <td>'; print_r(array_flip($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_reverse(arr, [сохранять ли ключи])</td>
        <td>Переворачивает массив в обратном порядке</td>
        <td>'; print_r(array_reverse($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_search(что ищем, arr, [сравнивать по типу])</td>
        <td>Ищет значения в массиве и возвращает ключ первого найденного элемента</td>
        <td>'; print_r(array_search(3, $arr)); echo '</td>
    </tr>
    <tr>
        <td>array_count_values(arr)</td>
        <td>Возвращает ассоциативный массив, где ключи - элементы массива, а значения - их кол-во в массиве</td>
        <td>'; print_r(array_count_values($arr)); echo '</td>
    </tr>
    <tr>
        <td>rsort(arr)</td>
        <td>Сортировка по убыванию</td>
        <td>'; rsort($arr); print_r($arr); echo '</td>
    </tr>
    <tr>
        <td>sort(arr)</td>
        <td>Сортировка по возрастанию</td>
        <td>'; sort($arr); print_r($arr); echo '</td>
    </tr>
    <tr>
        <td>krsort(arr)</td>
        <td>Сортировка по убыванию ключей</td>
        <td>'; krsort($arr); print_r($arr); echo '</td>
    </tr>
    <tr>
        <td>ksort(arr)</td>
        <td>Сортировка по возрастанию ключей</td>
        <td>'; ksort($arr); print_r($arr); echo '</td>
    </tr>
    <tr>
        <td>array_rand(arr, [сколько ключей])</td>
        <td>Возвращает случайный ключ из массива</td>
        <td>'.array_rand($arr).'</td>
    </tr>
    <tr>
        <td>array_unique(arr)</td>
        <td>Удаляет повторяющиесе элементы из массива</td>
        <td>'; print_r(array_unique($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_shift(arr)</td>
        <td>Вырезает и возвращает первый элемент массива</td>
        <td>'; print_r(array_shift($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_unshift(arr, какие элементы добавить)</td>
        <td>Добавляет элементы в начало массива. Возвращает новое колличество элементов в массиве</td>
        <td>'; print_r(array_unshift($arr, 1)); echo '</td>
    </tr>
    <tr>
        <td>array_pop(arr)</td>
        <td>Вырезает и возвращает последний элемент массива</td>
        <td>'; print_r(array_pop($arr)); echo '</td>
    </tr>
    <tr>
        <td>array_push(arr, элементы для добавления)</td>
        <td>Добавляет элементы в конец массива. Возвращает новое кол-во элементов в массиве</td>
        <td>'; print_r(array_push($arr, 5)); echo '</td>
    </tr>
    <tr>
        <td>array_fill(ключ первого элемента, сколько элементов, чем заполнять)</td>
        <td>Создает массив и заполняет его элементами с определеннными значениями</td>
        <td>'; print_r(array_fill(2, 4, 'x')); echo '</td>
    </tr>
    <tr>
        <td>array_chunk(arr, по сколько элементов)</td>
        <td>Разбивает одномерный массив в двумерный</td>
        <td>'; print_r(array_chunk($arr, 2)); echo '</td>
    </tr>
    <tr>
        <td>array_map(function, arr)</td>
        <td>Применет функцию ко всем элементам массива и возвращает измененный массив</td>
        <td>'; print_r(array_map('sqrt', $arr)); echo '</td>
    </tr>
    <tr>
        <td>array_intersect(arr1, arr2, ...)</td>
        <td>Вычисляет пересечение массивов</td>
        <td>'; print_r(array_intersect([1, 2, 3, 4], [3, 4, 5, 6])); echo '</td>
    </tr>
    <tr>
        <td>array_diff(arr1, arr2, ...)</td>
        <td>Возвращает массив элементов первого массива, которых нет в других массивах</td>
        <td>'; print_r(array_diff([1, 2, 3, 4], [3, 4, 5, 6])); echo '</td>
    </tr>
    <tr>
        <td>shuffle(arr)</td>
        <td>Перемешивает элементы массива</td>
        <td>'; shuffle($arr); print_r($arr); echo '</td>
    </tr>';

echo '</table>';
