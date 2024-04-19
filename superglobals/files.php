<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype='multipart/form-data'>
    <input type="file" name="image" id=""> </br> </br>
    <input type="submit" value='Upload' name='upload'>
    </form>

    </br> </br> </br>
    <?php
    // if(isset($_FILES['image'])){
    //     echo '<pre>';
    //     print_r($_FILES);
    //     echo '</pre>';
    // }

    // echo $name=$_FILES['image']['name'];
    // echo $temp_name=$_FILES['image']['tmp_name'];

    if(isset($_FILES['image'])){
        $name=$_FILES['image']['name'];
        $temp_name=$_FILES['image']['tmp_name'];
        
        if(move_uploaded_file($temp_name,'images/'.$name)){
            echo 'Image Upload Successfully';
        }
    }


    ?>
</body>
</html>