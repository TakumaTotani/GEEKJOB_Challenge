<?php


$a=3;

function kakeru(){

  global $a;//グローバル変数として計算を行う変数
  $a=$a*2;//二倍かけていく
  return $a;
  static $b=0;//何回実行されているかを保持する変数
}

for($i=0;$i<20;$i++){//関数を20回呼び出している
  $b=$i;//実行数を代入
  echo kakeru()."<br>";

}
  echo '実行されている回数は'.$i.'回です';



 ?>
