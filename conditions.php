<?php

// if else conditions

// $result=101;

// if($result>=80 && $result<=100){
//     echo 'Result = A+';
// }
// else if($result>=70 && $result<=79){
//     echo 'Result = A';
// }
// else if($result>=60 && $result<=69){
//     echo 'Result = B';
// }
// else if($result>=50 && $result<=59){
//     echo 'Result = A-';
// }
// else if($result>=40 && $result<=49){
//     echo 'Result = C';
// }
// else if($result>=33 && $result<=39){
//     echo 'Result = D';
// }
// else if($result>=0 && $result<=32){
//     echo 'Result = Failed';
// }
// else{
//     echo 'Result = unavailabled';
// }

// switch case conditions 

// $roll=7;
// switch($roll){
//     case 1:
//         echo 'Great';
//         break;
//     case 2:
//         echo 'Very Good';
//         break;
//     case 3:
//         echo 'Good';
//         break;
//     default:
//     echo 'Avarage';
// }

$marks=-5;
switch(true){
    case($marks>=80&&$marks<=100):
        echo 'Result = A+';
        break;
    case($marks>=70&&$marks<=79):
        echo 'Result = A';
        break;
    case($marks>=60&&$marks<=69):
        echo 'Result = B';
        break;
    case($marks>=50&&$marks<=59):
        echo 'Result = A-';
        break;
    case($marks>=40&&$marks<=49):
        echo 'Result = C';
        break;
    case($marks>=33&&$marks<=39):
        echo 'Result = D';
        break;
    case($marks>=0&&$marks<=32):
        echo 'Result = Failed';
        break;
    default:
    echo 'Result = unavailabled';
}
?>