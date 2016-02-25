<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>How to show the time</title>
</head>
<body>
<h1>TYPE AND DISPLAY YOUR NAME</h1>

<!--TEXT-->
<form action="display.php" method="post">
<dl>
<dt>NAME : </dt>
<dd>
<label for="my_name">NAME:</label>
<input id="my_name" type="text" name="my_name" size="35" maxlength="255" value="" />
</dd>

<!--RADIO-->
<dt>Gender : </dt>
<dd>
<input id="gender_male" type="radio" name="gender" value="male"/>
<label for="gender_male">male</label>
<input id="gender_female" type="radio" name="gender" value="female"/>
<lagel for"gender_female">female</label>
</dd>
</dl>

<!--SELECT-->
<div>
<label for="age">Age : </label>
<select name="age" id="age">
<?php 
for($i = 10; $i <= 70; $i++){
  echo ('<option value="' . $i . '">' . $i . 'years old</option>');
}
?>
</select>
</div>

<!--SELECT-->
<div>
<label for="pref">Prefecture : </label>
<select name="pref" id="pref">
<?php
$prefs = array('北海道','青森県','岩手県','宮城県','秋田県',
               '山形県','福島県','茨城県','栃木県','群馬県',
              '埼玉県','千葉県','東京都','神奈川県','新潟県'
              ,'富山県','石川県','福井県','山梨県','長野県'
              ,'岐阜県','静岡県','愛知県','三重県','滋賀県'
              ,'京都府','大阪府','兵庫県','奈良県','和歌山県'
              ,'鳥取県','島根県','岡山県','広島県','山口県'
              ,'徳島県','香川県','愛媛県','高知県','福岡県'
              ,'岡山県','広島県','山口県','徳島県','香川県'
              ,'佐賀県','長崎県');
foreach ($prefs as $pref) {
 	echo ('<option value="'.$pref.'">'.$pref.'</option>');
 	 }
?>
</select>
</div>



<input type="submit" value="send"/>

</form>
</body>
</html>
