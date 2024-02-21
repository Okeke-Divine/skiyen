<?php

session_start();
include("../../conn.php");
include("../ses.php");

$id = $_POST['id']; 

$uf = mysqli_query($conn,"DELETE FROM $followers WHERE following = '$id' and user_id = '$ses_id' LIMIT 1");
mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$id','$ses_uname stopped following you',UNIX_TIMESTAMP(),'0','')");


?>