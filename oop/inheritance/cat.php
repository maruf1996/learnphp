<?php

require 'animal.php';

class Cat extends Animal{

}

$cat=new Cat('White','2 KG','bread');

$cat->color();
$cat->weight();
$cat->food();

?>