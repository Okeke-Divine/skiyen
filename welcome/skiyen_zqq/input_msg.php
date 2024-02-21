<?php
session_start();
include("../../conn.php");
include("../ses.php");
include("../ver.php");
if(isset($_POST['msg'],$_POST['rec'])){
	$rec = $_POST['rec'];
	$msg = $_POST['msg'];
	if(empty($msg)){

	}else{
		if(empty($rec)){

		}else{
			$input_msg = mysqli_query($conn,"INSERT INTO $private_messages VALUES('','$ses_id','$rec',UNIX_TIMESTAMP(),'text','$msg','0','0')");
	if($input_msg){
		echo "sent";
	}
		}
	}
	

}

?>