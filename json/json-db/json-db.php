<?php

$con=mysqli_connect('localhost','root','','company') or die (mysqli_error());

$file='info.json';

$data=file_get_contents($file);

$array=json_decode($data);

// echo '<pre>';
// print_r($array);
// echo '</pre>';

foreach($array as $value){
    $id=$value['id'];
    $name=$value['name'];
    $class=$value['class'];
    $section=$value['section'];
    $city=$value['city'];

    $sql="INSERT INTO employes (id,name,class,section,city) VALUES ($id,$name,$class,$section,$city)";

    mysqli_query($con,$sql);
}


if($sql){
    echo 'Data Insert Success';
}else{
    echo 'Failed';
}

?>