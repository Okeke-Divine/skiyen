<?php

date_default_timezone_set('Africa/Lagos');
date_default_timezone_get('Africa/Lagos');

?>
<?php

session_start();
include("../../conn.php");
include("../ses.php");

if(isset($_POST['id'])){
$id = $_POST['id']; 
$follow = mysqli_query($conn,"INSERT INTO $followers VALUES('','$ses_id','$id',UNIX_TIMESTAMP())");

mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$id','$ses_uname started following you',UNIX_TIMESTAMP(),'0','profile.php?id=$ses_id','$ses_id','user>follow')");
}
// ../profile/?viewid=$id
?>
