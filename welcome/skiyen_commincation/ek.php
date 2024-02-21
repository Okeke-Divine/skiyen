<?php

if(isset($_POST['set'])){
    session_start();
    include("../../conn.php");
    include("../ses.php");

    $key = $_POST['key'];

	$ucimg = mysqli_query($conn,"SELECT * FROM $user_global_settings WHERE user_id = '$ses_id' and settings = 'chat_submit_text' and settings_value != ''");

        if(mysqli_fetch_assoc($ucimg)){
            
            mysqli_query($conn,"UPDATE $user_global_settings SET settings_value = '$key' WHERE user_id = '$ses_id' and settings = 'chat_submit_text'");

        }else{
            mysqli_query($conn,"INSERT INTO $user_global_settings VALUES (NULL,'$ses_id','chat_submit_text','$key')");
       
        }

        header("location:index.php?ek=true");

}else{
	header("location:index.php");
}


?>