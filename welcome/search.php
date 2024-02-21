<?php

if(isset($_GET['to'])){
	$to = $_GET['to'];
	header("location:search/?zqq=".$to."&&ns=u");
}else{
	header("location:search");
}

?>