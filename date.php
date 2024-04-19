<?php

// Date ()

// echo date('d').'</br>';
// echo date('m').'</br>';
// echo date('y').'</br>';
// echo date('d-m-y');
// echo '</br> </br>';
// echo date('D').'</br>';
// echo date('M').'</br>';
// echo date('Y').'</br>';
// echo date('d-M-Y');
// echo '</br> </br>';
// echo date('j').'</br>';
// echo date('w').'</br>';
// echo date('z').'</br>';
// echo date('n').'</br>';


// Time ()

echo 'Hours:'. date('h').'</br>';
echo 'Hours:'. date('H').'</br>';
echo 'Minutes:'. date('i').'</br>';
echo 'Seconds:'. date('s').'</br>';
echo 'Current Time:'. date('h:i:s a').'</br>';
date_default_timezone_set('America/New_York');
echo 'Current Time:'. date('h:i:s A').'</br>';


?>