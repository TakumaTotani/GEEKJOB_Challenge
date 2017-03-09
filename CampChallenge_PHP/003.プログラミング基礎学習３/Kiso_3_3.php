<?php

function test($a,$b=5,$type=false){

   $tashi=$a*$b;

  if($type==true){
    $tashi = $tashi**2;
  }

  return $tashi;

}


echo test(20, 5, true);



 ?>
