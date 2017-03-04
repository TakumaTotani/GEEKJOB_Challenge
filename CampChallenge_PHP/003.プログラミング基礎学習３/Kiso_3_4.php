<?php

function profile(){
echo '名前: '.'戸谷琢磨'."<br>";
echo '生年月日: '.'1990/08/30'."<br>";
echo '自己紹介: '.'趣味は映画鑑賞です。'."<br>";

return true;

}

  $return=profile();
  if($return==true){

    echo 'この処理は正しく実行されました';
  }else{

    echo '正しく実行できませんでした';


  }


 ?>
