<?php

$con=mysqli_connect('localhost','root','','company') or die (mysqli_error());

$sql="SELECT * FROM employes";
$query=mysqli_query($con,$sql);

$json_array=[];

while($row mysqli_fetch_assoc($query)){
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';
    $json_array[]=$row;
}
// echo '<pre>';
// print_r($json_array);
// echo '</pre>';

$json_encode=json_encode($json_array);
print_r($json_encode)

?>