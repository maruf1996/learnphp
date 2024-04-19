<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" placeholder='Name' name='uname'> </br> </br>
    <input type="email" placeholder='Email' name='email'> </br> </br>
    <textarea placeholder="Message" name='message'></textarea> </br> </br>
    <input type="submit" value='Submit' name='submit'>
    </form>

    </br> </br> </br>
    <?php
    if(isset($_POST['submit'])){
        echo $_REQUEST['uname']. '</br>';
        echo $_REQUEST['email']. '</br>';
        echo $_REQUEST['message']. '</br>';
    }
    ?>

</body>
</html>