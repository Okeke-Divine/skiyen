<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<?php 
session_start();
include("../../conn.php");
include("../../css.php");
include("../ses.php");
include("../ver.php");
include("../headers/settings.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/font/css/all.css">
<title><?php echo $ses_uname; ?> | My Account | <?php echo $site_name; ?></title>
</head>
<body>

<br>
<main class="container" role="main">
	
	<h4>Account Settings</h4>

	<!-- user should add his or her info button -->
	<button class="btn btn sbtn" onclick="move_window('change-password');" style="text-align: left;"><i class="fa fa-lock"></i> Change Password </button>


	<button class="btn btn sbtn" onclick="move_window('my-info');" style="text-align: left;"><i class="fa fa-info-circle"></i> My Info </button>


	<!-- <button class="btn btn-danger sbtn" style="text-align: left;"><i class="fa fa-trash"></i> Delete Account </button> -->

</main>


</body>
</html>