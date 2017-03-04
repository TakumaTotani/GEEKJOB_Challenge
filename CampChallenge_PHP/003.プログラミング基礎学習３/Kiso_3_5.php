<?php

function profile(){

  $id = 105;
  $name = '琢磨';
  $birth = '1990/08/30';
  $add = '港区';
  return array($id, $name, $birth, $add);
}
$parsonal=profile();
foreach($parsonal as $value){

  echo "$value<br>";
}
 ?>
