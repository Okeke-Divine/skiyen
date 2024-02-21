<?php

session_start();
include("../../../conn.php");
include("../../ses.php");
include("../../ver.php");

if(isset($_REQUEST['ses_rec_id'],$_REQUEST['sticker_name'])){
	$ses_rec_id = $_REQUEST['ses_rec_id'];
	$sticker_name = $_REQUEST['sticker_name'];
	if(empty($sticker_name)){

	}else{
		$input_msg = mysqli_query($conn,"INSERT INTO $private_messages VALUES('','$ses_id','$ses_rec_id',UNIX_TIMESTAMP(),'sticker','$sticker_name','0','0')");
	}
}

?>