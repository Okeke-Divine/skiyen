<?php

session_start();
$id = $_SESSION['user_id_skiyen_bot_one'];

$sql = "UPDATE users SET profile_pic = '' WHERE id = '$id'";

//80 443
?>