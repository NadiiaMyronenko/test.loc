<?php

echo '<table border="2" width="900" cellspacing="0">
    <caption>_SERVER</caption>
    <tr>
        <th>Параметры</th>
        <th>Действие</th>
        <th>Результат</th>
    </tr>
    <tr>
        <td>["DOCUMENT_ROOT"]</td>
        <td>Путь к корневой директории сервера</td>
        <td>'.$_SERVER["DOCUMENT_ROOT"].'</td>
    </tr>
    <tr>
        <td>["HTTP_ACCEPT"]</td>
        <td>Предпочтения клиента относительно типа документа</td>
        <td>'.$_SERVER["HTTP_ACCEPT"].'</td>
    </tr>
    <tr>
        <td>["HTTP_ACCEPT_LANGUAGE"]</td>
        <td>Предпочтения клиента относительно языка</td>
        <td>'.$_SERVER["HTTP_ACCEPT_LANGUAGE"].'</td>
    </tr>
    <tr>
        <td>["HTTP_HOST"]</td>
        <td>Имя сервера</td>
        <td>'.$_SERVER["HTTP_HOST"].'</td>
    </tr>
    <tr>
        <td>["HTTP_REFERER"]</td>
        <td>Адресс страницы, с которой пользователь перешел на данную страницу</td>
        <td>'.$_SERVER["HTTP_REFERER"].'</td>
    </tr>
    <tr>
        <td>["HTTP_USER_AGENT"]</td>
        <td>Информация о типе и версии браузера, операционнной системе пользователя</td>
        <td>'.$_SERVER["HTTP_USER_AGENT"].'</td>
    </tr>
    <tr>
        <td>["REMOTE_ADDR"]</td>
        <td>IP-адресс клиента</td>
        <td>'.$_SERVER["REMOTE_ADDR"].'</td>
    </tr>
    <tr>
        <td>["SCRIPT_FILENAME"]</td>
        <td>Абсолютный путь к файл</td>
        <td>'.$_SERVER["SCRIPT_FILENAME"].'</td>
    </tr>
    <tr>
        <td>["SERVER_NAME"]</td>
        <td>Имя сервера</td>
        <td>'.$_SERVER["SERVER_NAME"].'</td>
    </tr>
    <tr>
        <td>["SERVER_ADDR"]</td>
        <td>IP-адресс сервера</td>
        <td>'.$_SERVER["SERVER_ADDR"].'</td>
    </tr>
    <tr>
        <td>["SERVER_PORT"]</td>
        <td>Порт сервера</td>
        <td>'.$_SERVER["SERVER_PORT"].'</td>
    </tr>
    <tr>
        <td>["SERVER_SOFTWARE"]</td>
        <td>Веб-сервер</td>
        <td>'.$_SERVER["SERVER_SOFTWARE"].'</td>
    </tr>
    <tr>
        <td>["SERVER_PROTOCOL"]</td>
        <td>Версия HTTP-протокола</td>
        <td>'.$_SERVER["SERVER_PROTOCOL"].'</td>
    </tr>
    <tr>
        <td>["QUERY_STRING"]</td>
        <td>Параметры, переданные скрипту (все, что стоит в адрессе после ?)</td>
        <td>'.$_SERVER["QUERY_STRING"].'</td>
    </tr>
    <tr>
        <td>["PHP_SELF"]</td>
        <td>Имя скрипта, начиная от корневой директории виртуального хоста</td>
        <td>'.$_SERVER["PHP_SELF"].'</td>
    </tr>
    <tr>
        <td>["REQUEST_URI"]</td>
        <td>Содержит имя скрипта, начиная от корневой директории виртуального хоста, и параметры</td>
        <td>'.$_SERVER["REQUEST_URI"].'</td>
    </tr>';


echo '</table>';