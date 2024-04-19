<?php
// is function ()

// is_array();
// is_bool();
// is_int();
// is_float();
// is_scalar();
// is_string();
// is_null();
// is_numeric();
// is_callable();


// $var=24;
function hello(){};

// $check=is_array($var);
// $check=is_bool($var);
// $check=is_int($var);
// $check=is_float($var);
// $check=is_scalar($var);
// $check=is_string($var);
// $check=is_null($var);
// $check=is_numeric($var);
$check=is_callable('hello');

if($check){
    echo $check. ' is a valid';
}else{
    echo $check. ' is not a valid';
}



?>