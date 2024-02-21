<?php

session_start();
include("../../conn.php");
include("../ses.php");

//upload.php


if(isset($_POST["image"]))
{$data = $_POST['image'];



	list($type, $data) = explode(';', $data);
	
	list(, $data)    = explode(',', $data);
	
	$data = base64_decode($data);
	
	$imageName = "skiyen-profile-img($ses_uname)".time().'.png';
	
	$target_dir = "../all_user_profile_pic/";
	
	if(file_put_contents($target_dir.$imageName, $data)){
        $_SESSION['user_pp'] = $imageName;
       mysqli_query($conn,"UPDATE $user_table SET profile_pic = '$imageName' WHERE id = '$ses_id'");
		echo '<img src="../all_user_profile_pic/'.$imageName.'" class="img-thumbnail" />';

	}	

}

?>
