<form action="" method="get">
    <p><label for="name">Name:</label></p>
    <p><input type="text" name="name"></p>
    <p><label for="age">Age:</label></p>
    <p><input type="text" name="age"></p>
    <p><input type="submit" name="submit"></p>
</form>


<?php
if(isset($_GET["submit"])){
    if(! empty($_GET['name']) && !empty($_GET['age'])) {
        echo "Name: " . $_GET['name'] . '<br>';
        echo "Age: " . $_GET['age'] . '<br>';
    }
    else echo "Введите данные";
}