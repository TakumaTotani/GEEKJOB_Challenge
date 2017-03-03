<?php

//課題PHPプログラミング基礎学習2クエリストリング

$sosuu= array(2,3,5,7);
$param=$_GET['param'];
echo $param ."<br>";
$sosuu2 = "";



foreach($sosuu as $value){
while($param%$value == 0){
  $param = $param/$value;
  $sosuu2 .= "$value ";
}
}

echo $sosuu2."<br>";

if($param != 1){
echo $param."<br>";
}


?>
