<?php
/**
 * Created by PhpStorm.
 * User: nadiia
 * Date: 26.04.18
 * Time: 16:16
 */
class User{
    public $name;
    public $age;

    public function returnName(){
        return $this->name;
    }
}

$user = new User;
$user->name = "name";
echo 'Name: ' . $user->returnName() . '<br>';
echo 'Age: ' . ($user->age = 20);