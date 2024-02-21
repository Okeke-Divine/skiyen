<?php
include("../../conn.php");
$noti_id = $_REQUEST['noti_id'];
if(empty($noti_id)){
}else{
 mysqli_query($conn,"UPDATE $follow_notification
                        SET viewed = '1'
                        WHERE id = '$noti_id';
                        ");
}

?>