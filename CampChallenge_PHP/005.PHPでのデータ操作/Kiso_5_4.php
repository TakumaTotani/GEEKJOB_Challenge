<?php



move_uploaded_file(
  $_FILES['userfile']['tmp_name'],'uploaded.txt');

$fp = fopen('uploaded.txt','r');
$file_txt = fgets($fp);
echo $file_txt;
 ?>
