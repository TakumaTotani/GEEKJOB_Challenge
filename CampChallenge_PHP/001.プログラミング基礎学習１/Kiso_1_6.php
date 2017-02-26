<?php
//課題１を３つの商品種別を表示させる
$product=$_GET['zakka'];//1を入れる
$product1=$_GET['syokuhin'];//2を入れる
$product2=$_GET['sonota'];//3を入れる


echo $product.'雑貨';
echo $product1.'食品';
echo $product2.'その他';


//総額と１個あたりの値段を表示
$sougaku=$_GET['sougaku'];//総額3500円を入れる
$kosuu=$_GET['kosuu'];//個数5入れる

echo '総額は'.$sougaku.'円です';
echo '1個の値段は'.$sougaku/$kosuu.'円です';

//購入金額に応じてのポイント付与
$point='';
if ($sougaku<5000) {
   echo $point='ポイントの付与は'.$sougaku*0.05.'ポイントです';//5000円以上だと5ポイントの付与
  # code...
}elseif(sougaku<3000){

  echo $point='ポイントの付与は'.$sougaku*0.04.'ポイントです';//3000円以上だと4ポイントの付与
}else{

  echo 'ポイントの付与はありません';
}


//URLパラメーターhttp://localhost:8888/Kiso_1_6.php?zakka=1&syokuhin=2&sonota=3&sougaku=3500&kosuu=5
?>
