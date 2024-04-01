<?php

// while loop 
// $i=1;
// while($i<=100){
//     echo $i,'</br>';
//     $i=$i+1;
// }

// do while loop 
// $i=100;
// do{
//     echo $i, '</br>';
//     $i=$i-1;
// }while($i>=1)

// for loop 
// for($i=1; $i <= 100; $i++){
//     echo $i, '</br>';
// }

// nested loop
// echo '<ul>';
// for($i=1; $i<=3; $i++){
//     echo '<li>Parent Item</li>';
//     echo '<ol>';
//     for($x=1; $x<=2; $x++){
//         echo '<li>Child Item</li>';
//         echo '<ul>';
//         for($y=1; $y<=2; $y++){
//             echo '<li>Nseted Item</li>';
//         }
//         echo '</ul>';
//     }
//     echo '</ol>';
// }
// echo '</ul>';


// break continue 
for ($x=1; $x<=10; $x++){
    if($x==5){
        // break;
        continue;
    }
    echo $x, '</br>';
}

?>