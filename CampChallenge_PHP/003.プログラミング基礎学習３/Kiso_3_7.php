<?php


$a=3;

function kakeru(){

  global $a;//グローバル変数として計算を行う変数
  $a=$a*2;//二倍かけていく
  static $count = 0;//何回実行されているかを保持する変数
  echo '回数'.$count++.'<br>';
  return $a;
}

for($i=0;$i<20;$i++){//関数を20回呼び出している
  echo kakeru()."<br>";

}




 ?>
