<?php

session_start();
// ajax parameters vs get
@$my_id = $_GET['my_id'];
@$for = $_GET['for'];
@$my_uname = $_GET['my_uname'];
@$my_profile_pic = $_GET['my_profile_pic'];
@$uid = $_GET['uid'];
@$my_profile_pic = $_GET['my_profile_pic'];
//end

include("../../conn.php");
include("../ses.php");
include("../ver.php");
include("../../function.php");
if(my_profile($my_id,$ses_id)){
?>
<div class="br10 bg-white shadow-sm p-2">

        <img src="../all_user_profile_pic/<?php echo $ses_user_pp; ?>?r=<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>" class="my_nav_img">

        <button class="btn btn-light br10 wd100 text-left woym" onclick="goto('../post.php')">What's on your mind?</button>
        <div class="navbar">
	        <button class="btn btn" onclick="goto('../post.php?enter=text')"><i class="fa fa-align-center"></i> <span class="nss">Text</span></button>
	        <button class="btn btn" onclick="goto('../post.php?enter=photo')"><i class="fa fa-photo"></i> <span class="nss">Photo</span></button>
	        <button class="btn btn" onclick="goto('../post.php?enter=video')"><i class="fa fa-play-circle"></i> <span class="nss">Video</span></button>
	    </div>
</div>
<?php } ?>


<!-- get the post -->
<?php include("profile-post.php"); ?>