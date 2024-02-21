<?php

session_start();

include("../../../conn.php");
include("../../ses.php");

if(isset($_POST['id'])){
$id = $_POST['id'];


$delete_post_save = mysqli_query($group_connection_server,
	"UPDATE $setted_group
 	SET message = 'This message was deleted' 
 	WHERE id = '$id' LIMIT 1 ;");

$delete_post_save_tn = mysqli_query($group_connection_server,
	"UPDATE $setted_group
 	SET date = 1 
 	WHERE id = '$id' LIMIT 1 ;");

}


?>