<?php

	if(isset($_REQUEST['id'],$_REQUEST['action'])){
		$id = $_REQUEST['id'];
		$action = $_REQUEST['action'];
		include("../../conn.php");
		session_start();
		include("../ses.php");
		if($action == "star"){
			$star = mysqli_query($conn,"INSERT INTO $private_starred_message VALUES ('','$id','$ses_id')");
		}
	}

?>