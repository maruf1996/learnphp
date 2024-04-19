<?php

// FILTER_VALIDATE_INT
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_BOOLEAN
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_URL
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_MAC



$var='168.127.0.0';

// $options=array(
//     'options' => array(
//         'min_range'=>20,
//         'max_range'=>30
//     )
//     );

// echo filter_var($var,FILTER_VALIDATE_INT);
// var_dump (filter_var($var,FILTER_VALIDATE_INT));

// $filter= filter_var($var,FILTER_VALIDATE_INT,$options);
// $filter= filter_var($var,FILTER_VALIDATE_FLOAT);
// $filter= filter_var($var,FILTER_VALIDATE_BOOLEAN);
// $filter= filter_var($var,FILTER_VALIDATE_EMAIL);
// $filter= filter_var($var,FILTER_VALIDATE_URL);
// $filter= filter_var($var,FILTER_VALIDATE_IP);
$filter= filter_var($var,FILTER_VALIDATE_MAC);

if($filter){
    echo $var. " It's a valid mac";
}else{
    echo $var. " It's not a valid mac";
}

?>