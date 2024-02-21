<?php

	session_start();
  include("../../../conn.php");
  include("../../ses.php");
  include("../../ver.php");

  if(isset($_REQUEST['id'])){
  	$id = $_REQUEST['id'];
  	$ml = $ses_id;
  	$s = mysqli_query($conn,"DELETE FROM $todo_list WHERE `id` = '$id' and user_id = '$ses_id' LIMIT 1");
  }

?>