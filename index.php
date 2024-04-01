<?php

    $food='Pizza';
    echo 'I Love To '. $food . '<br>';

    $x=10;
    $y=20;
    $bool=true;

    $games1= array('cricket','football','hocky');
    $games2= ['cricket','football','hocky'];

    echo $x+$y . '<br>';
    echo ($x+$y) . '<br>';
    // echo ($games1) . '<br>';
    // echo ($games2) . '<br>';
    print $x+$y . '<br>';
    print ($x+$y) . '<br>';
    // print ($games1) . '<br>';

    // var_dump($food);
    // var_dump($x);
    // var_dump($bool);
    // var_dump($games1);
    // var_dump($games2);

    echo '<pre>';
    print_r($games1);
    echo '</pre>';

    echo '<pre>';
    print_r($games2);
    echo '</pre>';

?>