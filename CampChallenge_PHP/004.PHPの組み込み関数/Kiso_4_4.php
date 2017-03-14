<?php



date_default_timezone_set('Asia/Tokyo');
$timestamp = mktime(10,0,0,11,04,2015);
$timestamp1 = mktime(23,59,59,12,31,2015);

$time = $timestamp1-$timestamp;

echo $time;










 ?>
