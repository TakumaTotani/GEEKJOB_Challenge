<?php



date_default_timezone_set('Asia/Tokyo');
//ユーザー1回目の訪問時間の記録
$access_time = date('Y年m月d日 H時i分s秒');
setcookie('LastLoginDate',$access_time);

//次の訪問で記録
$lastdate = $_COOKIE['LastLoginDate'];

echo 'お帰りなさい！<br>';
echo '前回のログイン日は、'.$lastdate.'です！';



 ?>
