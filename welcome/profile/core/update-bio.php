<?php

	include("index.php");
	@$bio = $_GET['bio'];
	@$profile_id = $_GET['profile_id'];
	set_user_info($profile_id,'bio',$bio);

?>