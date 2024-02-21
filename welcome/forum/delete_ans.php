<?php

	session_start();
	include("../../css.php");
  include("../../js.php");
  include("../ver.php");
  include("../ses.php");
  include("../../conn.php");


  if(isset($_REQUEST['id'])){
  	$id = $_REQUEST['id'];
	  $del = mysqli_query($conn,"DELETE FROM $helpcenter_answer WHERE `id` = '$id' && `user_id` = '$ses_id' LIMIT 1");
  }

?>