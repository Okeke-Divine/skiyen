<?php

session_start();
include("../../conn.php");
include("../ses.php");

$target_dir = "../post_images_1123s/".$ses_id."_post_images/";
$fname = "skiyen-img".date("hisadymd").basename( $_FILES["file1"]["name"]);
$_SESSION['uploaded_fname'] = $fname;

$target_file = $target_dir . $fname;
    move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);

?> 
<center>
    <img src="../post_images_1123s/<?php echo $ses_id;?>_post_images/<?php echo $fname; ?>" class="img-thumbnail" style="width: 300px;height: 300px;">
</center>
<br>