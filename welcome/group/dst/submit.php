<!DOCTYPE HTML>
<html>
<body>
<meta charset="utf-8">
<?php

session_start();
if(isset($_POST['send'])){
	include("../../ses.php");
	include("../../../conn.php");
	$message = $_POST['message'];
    $null = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];
    if($message !=""){
	$cid = "INSERT INTO $null VALUES('','$ses_uname','$message',UNIX_TIMESTAMP(),'0','text','','')";
	if ($group_connection_server->query($cid)) {
	$query2 = mysqli_query($conn,"SELECT * FROM $groups WHERE name = '$null'");
	while($row = mysqli_fetch_array($query2)){
		$gid = $row['id'];
		global $id;
	}
	$query1 = mysqli_query($conn,"SELECT * FROM $line_up_groups WHERE group_id = '$gid'");
	if(mysqli_fetch_assoc($query1)){
	$query1 = mysqli_query($conn,"SELECT * FROM $line_up_groups WHERE group_id = '$gid'");
			while($row1 = mysqli_fetch_array($query1)){
				$lid = $row1['line_up_id'];
				$lid1 = $lid + 1;
				$end = mysqli_query($conn,"UPDATE $line_up_groups SET line_up_id = '$lid1' WHERE group_id = '$gid'");
				$end1 = mysqli_query($conn,"UPDATE $line_up_groups SET time = UNIX_TIMESTAMP() WHERE group_id = '$gid'");
			}
	}else{
$done12 = mysqli_query($conn,"INSERT INTO $line_up_groups VALUES ('','$gid','0',UNIX_TIMESTAMP())");	
	}
	}else{
		echo "<script>alert('Your message was not sent due to an error');</script>";
	}
}else{

}

}

?>
	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<form class="null" action="" method="POST">
	<textarea type="text" style="height:40px!important;" name="message" id="message" class="form-control mess_send_fix message" placeholder="Type a message..."></textarea>
	<button type="sumbit" name="send" class="mess_send_fix btn_send" value='Send'><i class="fa fa-paper-plane" style="color: black;border:0;"></i></button>
</form>
<style type="text/css">
	.mess_send_fix{
		position: fixed;
	}
	.message:focus{
		box-shadow: none!important;
	}
	.message{
		resize: none;
		border:0;
		bottom:0;
		left:0;
		width: 90%!important;
		display: inline-flex!important;
		height: 35px;
	}
	.btn_send{
		border-left: 1px solid grey;
		border-top:0;
		border-right:0;
		border-bottom:0;
		background: transparent;
		bottom: 0;
		width: 10%;
		height: 35px;
		right: 0;
	}
</style>
</body>
</html>