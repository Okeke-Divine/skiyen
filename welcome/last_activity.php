<?php

  session_start();
  include("../conn.php");
  include("ses.php");

  $lastactivity = mysqli_query($conn,"UPDATE $user_table SET last_activity = UNIX_TIMESTAMP() WHERE id = '$ses_id'");
  if($lastactivity){
  	echo "done";
  }else{
  	echo "not";
  }

  ?>
