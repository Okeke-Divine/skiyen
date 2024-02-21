<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<?php 
session_start();
include("../../conn.php");
include("../../css.php");
include("../ses.php");
include("../ver.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/font/css/all.css">
</head>
<body>
	<?php

	if(isset($_GET['into'])){
		@$into = $_GET['into'];
		if($into == "chat"){
			$title = "Chats";
			$page_to_include = "chats";
		}else if($into == "edit-intro"){
			$title = "Edit Profile Intro";
			$page_to_include = "edit-intro";
		}
		else if($into == "acount"){
			$title = "Account";
			$page_to_include = "acount";
		}
		else if($into == "help"){
			$title = "Help";
			$page_to_include = "help";
		}
		else if($into == "other"){
			$title = "Other";
			$page_to_include = "other";
		}
		else if($into == "storage"){
			$title = "Storage and Data";
			$page_to_include = "storage";
		}
		else if($into == "notifications"){
			$title = "Notifications";
			$page_to_include = "notifications";
		}else{
			$title = "Error";
			$page_to_include = "errors";
		}
	}else{
		$title = "Error";
		$page_to_include = "errors";
	}
	?>
	<title><?php echo $ses_uname; ?> | <?php echo $title; ?> | <?php echo $site_name; ?></title>
	<?php

	?>
	<title><?php echo $ses_uname; ?> | <?php echo $title; ?> | <?php echo $site_name; ?></title>
	<div class="navbar wd100 skiyen_background p-2 text-light">
		<button class="floatleft btn text-light" onclick="window.history.back();">
			<i class="fa fa-arrow-left"></i>
		</button>

		<span class="title1_menu"><b><?php echo $title; ?></b></span>

		<button class="btn btn"></button>
	</div>


	<br>

	<main class="container" role="main">
		<?php

		include("actions/xml.$page_to_include.php");

		?>
	</main>

</body>
</html>
<script type="text/javascript">
	function edit_bio(item){
		alert(item);
	}
</script>