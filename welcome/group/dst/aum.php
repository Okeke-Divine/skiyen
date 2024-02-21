<?php

if(isset($_REQUEST['action'])){
	session_start();
	$action = $_REQUEST['action'];
	$null = $_REQUEST['null'];
	$who_id = $_REQUEST['who_id'];
	include("../../../conn.php");
	include("../../ses.php");
	include("../../ver.php");
	$joined_groups_add = mysqli_query($conn, "INSERT INTO $joined_groups VALUES ('', '$action', '$null', UNIX_TIMESTAMP())");
	if($joined_groups_add){
				$noti = mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$who_id','$action! $ses_uname added you to $null group',UNIX_TIMESTAMP(),'0','group.php?name=$null')");
	}
}

?>