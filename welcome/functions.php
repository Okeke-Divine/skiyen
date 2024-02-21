<?php

function notification_number(){
  $number = 0;
  $notific = mysqli_query($conn,"SELECT * FROM $follow_notification WHERE viewed != '1' and notification_owner  = '$ses_id'");
  while($num = mysqli_fetch_array($notific)){
    $number = $number+1;
    global $number;
  }
  return $number;
}


?>