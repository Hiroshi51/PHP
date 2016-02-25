<!DOCTYPE html>
<html>
<head>
<title>How to show the time</title>
</head>
<body>
<h1>This is what time it is now in Japan.</h1>
<p>
<?php 
/**********TIME Parameter*********
 * Y : year by 4 digits
 * y : yaer by 2 digits
 * n : month
 * m : month with "0" at the begining
 * F : month in English
 * M : month by 3 charactors of English
 * j : day of the month
 * d : day of the month with 0
 * w : day of the week
 * l : day of the week in English
 * D : day by 3 characors
 * g : 12-hour format
 * G : 24-hour format
 * h : 12-hour format with "0"
 * H : 24-hour format with "0"
 * i : minute
 * s : second
 * m : micro second
 * ********************************/
date_default_timezone_set('Japan');
echo "It is " .date('G:i:s'). " now";      // echo the time with G,i,s
echo "<br>";
echo "It is " .date('Y:H:i:s'). " now";    // echo the year and the time with Y,H,i,s
?>
</p>
</body>
</html>
