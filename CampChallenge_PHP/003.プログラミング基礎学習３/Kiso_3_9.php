<?php

function profile(){

  $taro=
    array('名前'=>'タロウ','birth'=>'1987/06/07','住所'=>'渋谷区','id'=>'1');
  $hanako=
    array('名前'=>'ハナコ','birth'=>'1991/05/31','住所'=>'江東区','id'=>'2');
  $takuma=
    array('名前'=>'タクマ','birth'=>'1990/08/30','住所'=>'港区','id'=>'3');

  $profiles=
    array($taro,$hanako,$takuma);

  foreach ($profiles as $value) {
    foreach($value as $key => $v){
      if($key == "住所" || $key == "id"){
        continue;

      }else{
        echo $v."<br>";



        }



}

}

}

profile();








 ?>
