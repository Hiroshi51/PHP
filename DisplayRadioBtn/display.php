<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>How to show the time</title>
</head>
<body>
<?php 
echo ('NAME : ' . htmlspecialchars($_POST['my_name'],ENT_QUOTES));
echo ('<br>');
echo ('GENDER : ' . htmlspecialchars($_POST['gender'],ENT_QUOTES));
echo ('<br>');
echo ('Age : ' . htmlspecialchars($_POST['age'],ENT_QUOTES));
echo ('<br>');
echo ('Prefecture : ' . htmlspecialchars($_POST['pref'],ENT_QUOTES));
/*****************************************
 * ENT_QUOTES : safely get single quotations
 ****************************************/
?>
</body>
</html>
