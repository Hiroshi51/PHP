<?php 
echo ('NAME : ' . htmlspecialchars($_POST['my_name'],ENT_QUOTES));
echo ('<br>');
echo ('GENDER : ' . htmlspecialchars($_POST['gender'],ENT_QUOTES));
/*****************************************
 * ENT_QUOTES : safely get single quotations
 ****************************************/
?>
