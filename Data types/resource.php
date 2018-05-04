<?php
/**
 * Created by PhpStorm.
 * User: nadiia
 * Date: 26.04.18
 * Time: 16:37
 */

$host = 'test.loc';
$db = 'testDB';
$user = 'root';
$pass = '1701';


$link = mysqli_connect($host, $user, $pass, $db);
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
//print_r($result);
echo '<br><br>';
for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
print_r($data);
echo '<br><br>';




$dsn = "mysql:host=$host;dbname=$db";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
$stm = $pdo->query('SELECT * FROM users');
while($row = $stm->fetch()){
    print_r($row) . "\n";
}



