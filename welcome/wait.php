<!DOCTYPE HTML>
<html>
<body>
<meta charset="utf-8">
<?php


session_start();
if(isset($_POST['send'])){
    session_start();
	include("../../ses.php");
	include("../../../conn.php");
	$message = $_POST['message'];
    $null = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];
    $date = date("Y/m/d");
    $time = date("h:i:sa");
    if($message !=""){
	$cid = "INSERT INTO $null VALUES('','$ses_uname','$message','$time','$date')";
	if ($group_connection_server->query($cid)) {
	}else{
		echo "<script>alert('Your message was not sent, please check your connection and try again');</script>";
	}
}else{

}

}

?>
	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<form class="null" action="" method="POST">
	<textarea type="text" name="message" id="message" class="mess_send_fix message" placeholder="Type a message"></textarea>
	<button type="sumbit" name="send" class="mess_send_fix btn_send btn-secondary" value='Send'><i class="fa fa-paper-plane" style="color: white;"></i></button>
</form>
<style type="text/css">
	.mess_send_fix{
		position: fixed;
	}
	.message{
		bottom:0;
		left:0;
		width: 90%;
		height: 35px;
	}
	.btn_send{
		bottom: 0;
		width: 10%;
		height: 35px;
		right: 0;
	}
</style>
</body>
</html>