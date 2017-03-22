<?php


date_default_timezone_set('Asia/Tokyo');
session_start();
$logintime = date('Y年m月d日 H時i分s秒');
$_SESSION['lastlogin'] = $logintime;

echo 'お帰りなさい！<br>';
echo '前回のログインは、'.$_SESSION['lastlogin'].'です！';

 ?>
