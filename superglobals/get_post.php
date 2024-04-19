<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals</title>
</head>
<body>
    <form action="recive.php" method="POST">
        <p>Are You Sure</p>
        <input type="radio" name="vote">Yes
        <input type="radio" name="vote">No 
        <input type="radio" name="vote">N/A
</br>
</br>
    <input type="text" placeholder='Name' name='uname'> </br> </br>
    <input type="email" placeholder='Email' name='email'> </br> </br>
    <textarea placeholder="Message" name='message'></textarea> </br> </br>
    <input type="submit" value='Submit' name='submit'>
    </form>
</body>
</html>