<?php

	if(isset($_REQUEST['id'],$_REQUEST['action'])){
		$id = $_REQUEST['id'];
		$action = $_REQUEST['action'];
		include("../../conn.php");
		session_start();
		include("../ses.php");
		if($action == "unstar"){
			$star = mysqli_query($conn,"DELETE FROM $private_starred_message WHERE message_id = '$id'");
		}
	}

?>