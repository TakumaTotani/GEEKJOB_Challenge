<?php

$file = fopen('Kiso4_8.txt','r');//fopenでファイルを開く(r)は読み込みモードで開く
while(!feof($file)){//while文で文末までループ処理


  $txt = fgets($file);//fgetで取得したデータを変数に格納

  echo $txt.'<br>';
}


fclose($file);//fileをクローズ






 ?>
