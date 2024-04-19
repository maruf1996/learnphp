<?php

// { indexed array }

// $subjects=array('bangla','english','history','math');

// echo '<ul>';
// for($i=0; $i<=3; $i++){
//     echo '<li>'.$subjects[$i].'</li>';
// }
// echo '</ul>';


// { associative array }

// $subjects=array('bangla'=>77,'english'=>65,'history'=>96,'math'=>80);

// foreach($subjects as $key => $subject){
//     echo $key.' : '.$subject. '</br>';
// }

// echo '<ul>';
// foreach($subjects as $key => $subject){
//     echo '<li>'.$key.' : '.$subject.'</li>';
// }
// echo '</ul>';


// { multidimensional array }

// $infos=array(
// array(1,'john','bangla',67),
// array(2,'Will','math',77),
// array(3,'Karly','history',87),
// array(4,'James','english',67),
// );

// echo $infos[1][2];

// echo '<pre>';
// print_r($infos);
// echo '</pre>';

// echo '<table>';
// for($row=0; $row < 4; $row++){
//     echo '<tr>';
//     for($col=0; $col <br 4; $col++){
//         echo '<td>'.$infos[$row][$col].'</td>';
//     }
//     echo '</tr>';
// }
// echo '</table>';


// { sorting array }

// $colors=array('red','yellow','blue','green');
// // sort($colors);
// rsort($colors);

// echo '<pre>';
// print_r($colors);
// echo '</pre>';

// $infos=array('M'=>12,'y'=>23,'T'=>33,'R'=>76);
// asort($infos);
// ksort($infos);
// arsort($infos);
// krsort($infos);


// echo '<pre>';
// print_r($infos);
// echo '</pre>';


// { foreach loop }

// $colors=array('red','yellow','blue','green');

// echo '<ul>';
// foreach($colors as $color){
//     echo '<li>'.$color.'</li>';
// }
// echo '</ul>';

//  $subjects=array('bangla'=>77,'english'=>65,'history'=>96,'math'=>80);

// foreach($subjects as $key => $subject){
//     echo $key.' : '.$subject. '</br>';
// }


// foreach list()

// $numbers=[
//     [1,2,3],
//     [4,6,8]
// ];
// foreach ($numbers as list($a,$b,$c)){
//     echo $a.$b.$c. '</br>';
// }

// $infos=[
//     [1,'Maruf','CSE',27,'Barishal'],
//     [2,'Hasan','CSE',28,'Bhola'],
//     [3,'Akter','CSE',26,'Bhola'],
//     [4,'Rasel','CSE',29,'Barishal'],
// ];

// foreach($infos as list($id,$name,$dep,$age,$address)){
//     echo $id.' '.$name.' '.$dep.' '.$age.' '.$address.'</br>';
// }

// { array_merge() & array_combine()}

// $names=['Maruf','Hasan','Akter'];
// $ages=[28,29,27];

// $array=array_combine($names,$ages);
// $array=array_merge($names,$ages);

// echo '<pre>';
// print_r($array);
// echo '</pre>';

// { array_column() }

// $infos=[
//     ['id'=>1,'name'=>'Maruf','department'=>'CSE','age'=>27,'city'=>'Barishal'],
//     ['id'=>2,'name'=>'Hasan','department'=>'CSE','age'=>29,'city'=>'Bhola'],
//     ['id'=>3,'name'=>'Rasel','department'=>'CSE','age'=>28,'city'=>'Barishal'],
//     ['id'=>4,'name'=>'Akter','department'=>'CSE','age'=>26,'city'=>'Bhola'],
// ];

// $array=array_column($infos,'city');

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { array_pop() & array_push()}

// $colors=array('red','yellow','blue','green');
// $array=array_pop($colors);
// $array=array_push($colors,'orange');

// echo '<pre>';
//     print_r($colors);
// echo '</pre>';


// { array_rand() & Shuffle()}

// $colors=array('red','yellow','blue','green','orange');

// $array=array_rand($colors);
// echo $colors[$array];

// $array=array_rand($colors,3);
// echo $colors[$array[0]].'</br>';
// echo $colors[$array[1]].'</br>';
// echo $colors[$array[2]].'</br>';

// echo '<pre>';
//     print_r($array);
// echo '</pre>';

// shuffle($colors);

// echo '<pre>';
//     print_r($colors);
// echo '</pre>';


// { Array_replace() & Array_Replace_Recursive() }

// $color1=array('red','yellow');
// $color2=array('green','orange');
// $color3=array_replace($color1,$color2);

// echo '<pre>';
//     print_r($color3);
// echo '</pre>';

// $arr1=array(
//     'a'=>array('red','blue','yellow'),
//     'b'=>array('green','teal','black')
// );
// $arr2=array(
//     'a'=>array('orange','gray','skyblue'),
//     'b'=>array('light','dark','grey')
// );

// $array=array_replace_recursive($arr1,$arr2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_diff() }

// $color1=array(
//     'a'=>'red',
//     'b'=>'blue',
//     'c'=>'yellow'
// );
// $color2=array(
//     'a'=>'red',
//     'b'=>'yellow'
// );

// $array=array_diff($color1,$color2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// Array_diff_assoc() 

// $color1=array(
//     'a'=>'red',
//     'b'=>'blue',
//     'c'=>'yellow'
// );
// $color2=array(
//     'a'=>'red',
//     'b'=>'yellow',
//     'c'=>'white'
// );

// $array=array_diff_assoc($color1,$color2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_diff_key() }

// $color1=array(
//     'a'=>'red',
//     'b'=>'blue',
//     'c'=>'yellow'
// );
// $color2=array(
//     'a'=>'red',
//     'e'=>'yellow',
//     'd'=>'white'
// );

// $array=array_diff_key($color1,$color2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_intersect() }

// $color1=array(
//     'a'=>'red',
//     'b'=>'blue',
//     'c'=>'yellow'
// );
// $color2=array(
//     'a'=>'red',
//     'b'=>'yellow'
// );

// $array=array_intersect($color1,$color2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_intersect_assoc() }

// $color1=array(
//     'a'=>'red',
//     'b'=>'blue',
//     'c'=>'yellow'
// );
// $color2=array(
//     'a'=>'red',
//     'b'=>'yellow',
//     'c'=>'white'
// );

// $array=array_intersect_assoc($color1,$color2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_intersect_key() }

// $color1=array(
//     'a'=>'red',
//     'b'=>'blue',
//     'c'=>'yellow'
// );
// $color2=array(
//     'a'=>'red',
//     'b'=>'yellow',
//     'd'=>'white'
// );

// $array=array_intersect_key($color1,$color2);

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_range() }

// $array=range(1,100);
// $array=range(100,1);
// $array=range(1,100,5);
// $array=range('A','Z');
// $array=range('a','z');

// echo '<pre>';
//     print_r($array);
// echo '</pre>';


// { Array_slice() }

$colors=array('red','yellow','blue','green','orange');

// $slice=array_slice($colors,3);
$slice=array_slice($colors,1,4);
$slice=array_slice($colors,-2,1);
echo '<pre>';
    print_r($slice);
echo '</pre>';



?>