<?php

$file='hello.txt';

// if(is_dir($file)){
//     echo 'Yes, It is Dir';
// }else{
//     echo 'No';
// }

// if(is_executable($file)){
//     echo 'Yes, It is Exe';
// }else{
//     echo 'No';
// }

// if(is_file($file)){
//     echo 'Yes, It is File';
// }else{
//     echo 'No';
// }

// if(is_link($file)){
//     echo 'Yes, It is Link';
// }else{
//     echo 'No';
// }

// if(is_readable($file)){
//     echo 'Yes, It is Readable';
// }else{
//     echo 'No';
// }

// if(is_uploaded_file($file)){
//     echo 'Yes, It is Uploaded';
// }else{
//     echo 'No';
// }

if(is_writable($file)){
    echo 'Yes, It is writable';
}else{
    echo 'No';
}

// mkdir('another');
// rmdir('another');
// echo filesize($file);
// echo filetype($file);
// echo realpath($file);

// echo '<pre>';
// print_r(pathinfo($file));
// echo '</pre>';

// echo '<pre>';
// print_r(pathinfo($file,PATHINFO_BASENAME));
// echo '</pre>';

// echo dirname($file);
// echo basename($file);

// if(file_exists($file)){
//     echo readfile($file);
//     copy($file,'copyfile.txt');
//     rename('copyfile.txt','rename.txt');
//     unlink('rename.txt');
// }else{
//     echo 'File not Found';
// }

?>