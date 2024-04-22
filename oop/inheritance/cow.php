<?php

require 'animal.php';

class Cow extends Animal{

}

$cow=new Cow('Black & White','80 KG','water');

$cow->color();
$cow->weight();
$cow->food();

?>