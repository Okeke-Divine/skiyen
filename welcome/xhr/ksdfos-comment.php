<?php
session_start();
include("../../conn.php");
include("../ses.php");

if(isset($_REQUEST['id'],$_REQUEST['comment'])){
	$id = $_REQUEST['id'];
	$foor = $_REQUEST['foor'];
	$comment = $_REQUEST['comment'];
$sent = mysqli_query($conn,"INSERT INTO $post_comments VALUES('','$id','$ses_uname','$comment',UNIX_TIMESTAMP())");
if($sent){
	echo "Sent";
	if($foor != $ses_id){
	$noti = mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$foor','$ses_uname commented on your post',UNIX_TIMESTAMP(),'0','post-info.php?for=$id')");
}

}else{
	echo "no sent";
}
}

?>