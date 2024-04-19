<?php
session_start();

$_SESSION['game']='Cricket';
$_SESSION['color']='Teal';

if(isset($_SESSION['game'])){
    echo 'Session Set';
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
  
    </br> </br> </br>
</body>
</html>