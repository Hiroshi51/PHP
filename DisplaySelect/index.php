<!DOCTYPE html>
<html>
<head>
<title>How to show the time</title>
</head>
<body>
<h1>TYPE AND DISPLAY YOUR NAME</h1>
<form action="display.php" method="post">
<select name="age" id="age">
<?php 
for($i = 10; $i <= 70; $i++){
  echo ('<option value="' . $i . '">' . $i . 'years old</option>');
}
?>
</select>
<input type="submit" value="send"/>
</form>
</body>
</html>
