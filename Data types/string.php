<?php

$myStr = "iT is my str!!!!!";
echo 'String: ' . $myStr . '<br><br>';

echo '<table border="2" width="600" cellspacing="0">
    <caption>Функции для работы со строками:</caption>
    <tr>
        <th>Название</th>
        <th>Действие</th>
        <th>Результат</th>
    </tr>
    <tr>
        <td>strtolower(str)</td>
        <td>Перевод в нижний регистр</td>
        <td>'.strtolower($myStr).'</td>
    </tr>
    <tr>
        <td>strtoupper(str)</td>
        <td>Перевод в верхний регистр</td>
        <td>'.strtoupper($myStr).'</td>
    </tr>
    <tr>
        <td>ucfirst(str)</td>
        <td>Перевод первого символа в верхний регистр</td>
        <td>'.ucfirst($myStr).'</td>
    </tr>
    <tr>
        <td>lcfirst(str)</td>
        <td>Перевод первого символа в нижний регистр</td>
        <td>'.lcfirst($myStr).'</td>
    </tr>
    <tr>
        <td>ucwords(str)</td>
        <td>Перевод первого символа каждого слова в верхний регистр</td>
        <td>'.ucwords($myStr).'</td>
    </tr>
    <tr>
        <td>strlen(str)</td>
        <td>Длина строки </td>
        <td>'.strlen($myStr).'</td>
    </tr>
    <tr>
        <td>substr(str, откуда, [сколько])</td>
        <td>Вырезает и возвращает подстроку </td>
        <td>'.substr($myStr, 4, 5).'</td>
    </tr>
    <tr>
        <td>str_replace(что меняем, на что меняем, где меняем)</td>
        <td>Ищет заданный текст и меняет его на другой</td>
        <td>'.str_replace('my', 'not', $myStr).'</td>
    </tr>
    <tr>
        <td>strtr(str, массив замен)</td>
        <td>Поиск и замена символов в строке</td>
        <td>'.strtr($myStr, ['i'=>'e', 's'=>3]).'</td>
    </tr>
    <tr>
        <td>substr_replace(str, на что меняем, с какого символа, [сколько символов])</td>
        <td>Заменяет указанную часть строки на другую</td>
        <td>'.substr_replace($myStr, '1', 6, 5).'</td>
    </tr>
    <tr>
        <td>strpos(str, что ищем, [откуда искать])</td>
        <td>Возвращает позицию первого вхождения подстроки в строку</td>
        <td>'.strpos($myStr, 's', 2).'</td>
    </tr>
    <tr>
        <td>strrpos(str, что ищем, [откуда искать])</td>
        <td>Возвращает позицию последнего вхождения подстроки</td>
        <td>'.strrpos($myStr,'s', 2).'</td>
    </tr>
    <tr>
        <td>strstr(str, что ищем)</td>
        <td>Находит первое вхождение подстроки в строку и возвращает строку с этого места</td>
        <td>'.strstr($myStr, ' ').'</td>
    </tr>
    <tr>
        <td>explode(разделитель, str)</td>
        <td>Разбивает строку в массив по разделителю</td>
        <td>'.explode(' ', $myStr).'</td>
    </tr>
    <tr>
        <td>implode(разделитель, str)</td>
        <td>Сливает массив в строку с указанным разделителем</td>
        <td>'.implode('-', ['2018', '04', '21']).'</td>
    </tr>
    <tr>
        <td>str_split(str, кол-во символов в элементе массива)</td>
        <td>Разбивает строку в массив</td>
        <td>'.str_split($myStr, 3).'</td>
    </tr>
    <tr>
        <td>trim(str)</td>
        <td>Удаляет пробелы с начала и конца строки</td>
        <td>'.trim($myStr).'</td>
    </tr>
    <tr>
        <td>strrev(str)</td>
        <td>Переворачивает строку</td>
        <td>'.strrev($myStr).'</td>
    </tr>
    <tr>
        <td>str_shuffle(str)</td>
        <td>Переставляет символы в случайном порядке</td>
        <td>'.str_shuffle($myStr).'</td>
    </tr>
    <tr>
        <td>number_format(число)</td>
        <td>Задает формат вывода чисел</td>
        <td>'.number_format(1234.567, 2, '.', ',').'</td>
    </tr>
    <tr>
        <td>str_repeat(str, сколько раз повторить)</td>
        <td>Повторяет строку заданное колличество раз</td>
        <td>'.str_repeat('my', 5).'</td>
    </tr>
    <tr>
        <td>htmlspecialchars(str)</td>
        <td>Позволяет вывести в браузер теги так, чтобы он не считал их командами</td>
        <td>'.htmlspecialchars("<b>$myStr</b>").'</td>
    </tr>
    <tr>
        <td>strip_tags(str, [разрешенные теги])</td>
        <td>Удаляет html теги из строки</td>
        <td>'.strip_tags("<b>$myStr</b>").'</td>
    </tr>
    <tr>
        <td>chr(код)</td>
        <td>Находит символ по его коду</td>
        <td>'.chr(97).'</td>
    </tr>
    <tr>
        <td>ord(символ)</td>
        <td>Возвращает ASCII код символа</td>
        <td>'.ord('a').'</td>
    </tr>
    <tr>
        <td>substr_count(str, подстрока)</td>
        <td>Подсчитывает сколько раз встречается подстрока в строке</td>
        <td>'.substr_count($myStr, 'tr').'</td>
    </tr>
    <tr>
        <td>strchr(str, что ищем)</td>
        <td>Находит первое вхождение подстроки и возвращает строку с этого места и до конца</td>
        <td>'.strchr($myStr, 'my').'</td>
    </tr>
    <tr>
        <td>strrchr(str, что ищем)</td>
        <td>Находит последнее вхождение символа и возвращает строку с єтого места и до конца</td>
        <td>'.strrchr($myStr, 't').'</td>
    </tr>';

echo '</table>';
