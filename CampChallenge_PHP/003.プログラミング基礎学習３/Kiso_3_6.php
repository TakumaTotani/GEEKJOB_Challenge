<?php

function profile($keyword){

  $taro=
    array('1','タロウ','1987/06/07','渋谷区');
  $hanako=
    array('2','ハナコ','1998/10/13','江東区');
  $takuma=
    array('3','タクマ','1990/08/30','港区');

  $profiles=
    array($taro,$hanako,$takuma);

  foreach ($profiles as $value) {

    

      if(in_array($keyword, $value)){
        return $value;

}

}


}

// var_dump(profile('ハナコ'));
$value = profile('タクマ');

foreach ($value as $v) {
  echo $v ."<br>";
}
















 ?>
