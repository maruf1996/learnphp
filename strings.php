<?php

// $str='we love our country';
// echo $str, '</br>';
// echo strtoupper($str), '</br>';
// echo strtolower($str), '</br>';
// echo ucfirst($str), '</br>';
// echo lcfirst($str), '</br>';
// echo ucwords($str), '</br>';

$str='we love our country';
// echo strlen($str);
// echo str_word_count($str);

// echo '<pre>';
// echo print_r(str_word_count($str,1));
// echo print_r(str_word_count($str,2));
// echo '</pre>';

echo substr_count($str,'country');

?>