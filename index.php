<?php
// index.php
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");
echo "Name : " . $sheep->get_name() . "<br>";
echo "legs : " . $sheep->get_legs() . "<br>";
echo "cold blooded : " . $sheep->get_cold_blooded() . "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->get_name() . "<br>";
echo "legs : " . $kodok->get_legs() . "<br>";
echo "cold blooded : " . $kodok->get_cold_blooded() . "<br>";
echo "jump: " . $kodok->jump(); 
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->get_name() . "<br>";
echo "legs : " . $sungokong->get_legs() . "<br>";
echo "cold blooded : " . $sungokong->get_cold_blooded() . "<br>";
echo "yell: " . $sungokong->yell(); 
?>