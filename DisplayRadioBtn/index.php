<!DOCTYPE html>
<html>
<head>
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

<input type="submit" value="send"/>

</form>
</body>
</html>
