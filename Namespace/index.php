<?php
require "user.php";
require "student.php";
require "car.php";
use Fahima\User;
use Rahima\User as Student ;
use Carname\Car;
$object = new Car();
$object->info();
echo "<br>";
$obj = new User();
$obj->show();
echo "<br>";
$ob = new Student();
$ob->display();
?>


