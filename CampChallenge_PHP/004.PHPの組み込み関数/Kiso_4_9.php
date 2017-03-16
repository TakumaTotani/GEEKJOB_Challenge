<?php

date_default_timezone_set('Asia/Tokyo');
//$starttime = date('Y/m/d H:i:s');//処理時間を設定する
$starttime = microtime();



$url = 'learn.geekjob.jp';


$serch = strstr($url,'l');

if($serch == true){  //strstrの返却(true or false)を比較

  echo "検索サイトがヒットしました。<br>ヒットしたURL:$url"."<br>";
}else {
  echo "検索サイトがヒットしませんでした。"."<br>";
}

//$endtime = date('Y/m/d H:i:s');//終了時間を設定する
$endtime = microtime();
$arrTime = explode('.',microtime(true));


$fp = fopen('Kiso4_9.txt' , "a");//ログファイルを開く

fwrite($fp,'プログラム開始日時:'.$starttime."<br>");//ログファイルに開始時間の書き込みを行う
fwrite($fp,'プログラム終了日時:'.$endtime);//ログファイルに終了時間の書き込みを行う

$fp = fopen('Kiso4_9.txt' , "r");
$file_txt = fgets($fp);
echo $file_txt;

fclose($fp);









 ?>
