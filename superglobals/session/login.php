<?php
session_start();

if($_POST['email']==='maruf3813@gmail.com' && $_POST['password']==='123'){
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];

    echo 'Welcome Your Email is '.$_SESSION['email']. ' and Your Password is '. $_SESSION['password'];
    echo '</br> </br> <a href="logout.php">Logout</a>';
}
else
{
    echo 'Not Match';
}


?>