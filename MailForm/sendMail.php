<?php
	mb_language("japanese");
	mb_internal_encoding("UTF-8");
	$to      = "mail@address";
	$subject = $_POST['subject'];
	$body    = $_POST['message'];
	$from    = mb_encode_mimeheader(mb_convert_encoding($_POST['name'],"JIS","UTF-8"));
	$success = mb_send_mail($to, $subject, $message, "From:".$from);
?>
<?php
	if($success){
		print('Successfully sent');
	}else{
		print('Failed to send');
	}
?>