<?php

session_start();
include("../conn.php");
include("ses.php");

if(isset($_POST['id'])){
$foor = $_POST['foor'];
$id = $_POST['id']; 
$liked = mysqli_query($conn,"INSERT INTO $post_reactions VALUES('','$id','$ses_uname','like','$ses_id',UNIX_TIMESTAMP())");
		if($ses_id != $foor){
			// $noti = mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$foor','$ses_uname reacted to your post',UNIX_TIMESTAMP(),'0','post-info.php?for=$id','$ses_id','post->react');");
		}
}

?>