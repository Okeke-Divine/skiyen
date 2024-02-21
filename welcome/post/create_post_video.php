<?php

	if(isset($_REQUEST['text'],$_REQUEST['privacy'])){
		$text = $_REQUEST['text'];
		$privacy = $_REQUEST['privacy'];
		include("../../conn.php");
		session_start();
		include("../ses.php");
		$file_name = $_SESSION['uploaded_fname'];

		 $query = mysqli_query($conn,"INSERT INTO $user_post VALUES(NULL,'$ses_id','$text',UNIX_TIMESTAMP(),'video','','$file_name','$privacy','normal_post')");
		 if($query){
		 	include("post_created.php");
		 }else{
		 	include("post_not_created.php");
		 }

	}

?>
