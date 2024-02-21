<?php

session_start();
include("../../conn.php");
include("../ses.php");

$target_dir = "../post_videos_issmims/".$ses_id."post_videos/";
$fname = "skiyen-video".date("hisadymd").basename( $_FILES["file1"]["name"]);
$_SESSION['uploaded_fname'] = $fname;

$target_file = $target_dir . $fname;
    move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);

?> 
<center>
	<video autoplay="" controls="">
    	<source src="../post_videos_issmims/<?php echo $ses_id;?>post_videos/<?php echo $fname; ?>">
    </video>
</center>
<br>