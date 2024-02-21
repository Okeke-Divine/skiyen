<?php

session_start();
include("welcome/ses.php");

if(isset($ses_uname)){
	if(empty($ses_uname)){
		header("location:login");
	}else{
		header("location:welcome/");
	}
}else{
	header("location:login");
}

?>
Please wait