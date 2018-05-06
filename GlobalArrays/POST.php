<form action="" method="post">
    <p><label for="name">Name:</label></p>
    <p><input type="text" name="name"></p>
    <p><label for="age">Age:</label></p>
    <p><input type="text" name="age"></p>
    <p><input type="submit" name="submit"></p>
</form>


<?php
if(isset($_POST["submit"])){
    if(! empty($_POST['name']) && !empty($_POST['age'])) {
        echo "Name: " . strip_tags($_POST['name']) . '<br>';
        echo "Age: " . strip_tags($_POST['age']) . '<br>';
    }
    else echo "Введите данные";
}

