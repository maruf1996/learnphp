<?php

require 'animal.php';

class Dog extends Animal{

}

$dog=new Dog('Black','10 KG','rice');

$dog->color();
$dog->weight();
$dog->food();

?>