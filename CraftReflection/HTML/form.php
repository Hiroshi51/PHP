<?php 
    session_start();
    $errorFlag = "off";
	if(!empty($_POST)){
		$error = array();
	    $required = array("name","email","message");
	    for($i=0; $i<count($required); $i++){
	    	if(empty($_POST[$required[$i]])){
	    		$error[$required[$i]] = "blank";
	    		$errorFlag = "on";
	    	}
	    }	
	    if($errorFlag == "off"){
	    	$_SESSION['post'] = $_POST;
	    	header('Location: check.php');
	    	exit();
	    }
	}
	function showValue($key){
		if(empty($_POST)){
			return $_SESSION['post'][$key];
		}
		else{
			return $_POST[$key];
		}
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
	  <!--Contact Form-->
	  <p>下記フォームにご入力いただき確認ボタンを押してください。</p>
	  <p><?php if($errorFlag == "on"){echo "必須事項にいくつが漏れがあるようです。";} ?></p>
	  <form action="" method="post">
		<dl>
			<dt><span class="alert">required</span>Name</dt>
			<dd><input name="name" type="text" id="name" size="50" maxlength="255" value="<?php echo showValue('name');?>">
			<?php if($error['name'] == "blank"){echo "<span class='alert'>name is required</span>";} ?>
			</dd>
			<dt>subject</dt>
			<dd><input name="subject" type="text" id="subject" size="50" maxlength="255" value="<?php echo showValue('subject');?>">
			<?php if($error['subject'] == "blank"){echo "<span class='alert'>subject is required</span>";} ?>
			</dd>
			<dt><span class="alert">required</span>email</dt><dd><input name="email" type="text" id="email" size="50" maxlength="255" value="<?php echo showValue('email');?>">
			<?php if($error['email'] == "blank"){echo "<span class='alert'>email is required</span>";} ?>
			</dd>
			<dt>TEL</dt><dd><input name="tel" type="text" id="tel" size="50" maxlength="255" value="<?php echo showValue('tel');?>"></dd>
			<dt><span class="alert">required</span>Message</dt><dd><textarea name="message" id="message" cols="50" rows="10"><?php echo showValue('message');?></textarea>
			<?php if($error['message'] == "blank"){echo "<span class='alert'>message is required</span>";} ?>
			</dd></dd>
		</dl> 
        <input type="submit" value="CHECK"/>
	  </form>
	</body>
</html>