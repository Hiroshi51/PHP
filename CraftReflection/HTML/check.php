<?php
 session_start();
 $userPost = $_SESSION['post'];
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	  <!--Contact Form-->
	  <p>下記フォームにご入力いただき確認ボタンを押してください。</p>
	  <form action="sendMail.php" method="post">
		<dl>
			<?php 
			foreach($userPost as $key => $value){
			$dtElm = '<dt>'.$key.'</dt><dd>'.$userPost[$key].'</dd>';
			echo $dtElm;
			}
			?> 
		</dl> 
		<?php 
			foreach($userPost as $key => $value){
			$inputElm = '<input type="hidden" name="'.$key.'" value="'.$value.'"/>';
			echo $inputElm;
			}
		 ?> 
        <input type="submit" value="送信する"/>
        <a href="index.php">入力画面編へ戻る</a>
	  </form>
	</body>
</html>