<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php 
	session_start();
	include("../../conn.php");
	include("../ses.php");
	include("../ver.php");
	include("../../css.php");
	include("../headers/settings.php");
	include("../../php.php");
	?>
	<title><?php echo $ses_uname; ?> | Settings | Skiyen</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"><link rel="stylesheet" type="text/css" href="../../font/css/all.css">
	<link rel="shortcut icon" type="img/icon" href="../../logo/s1.png">
</head>
<body>
<br>


<main class="container" role="main">
<?php

if(isset($_POST['change'])){
	$opsw = $_POST['opsw'];
	$npsw = $_POST['npsw'];
	$cpsw = $_POST['cpsw'];

	$opsw1 = md5($opsw);

	if($opsw1 == $ses_psw){

		if($npsw == $cpsw){

			$md5_npsw = md5($npsw);
			$up = mysqli_query($conn,"UPDATE $user_table SET password = '$md5_npsw' WHERE id = '$ses_id'");
			if($up){
				$noti = mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$ses_id','Your password was recently changed',UNIX_TIMESTAMP(),'0','account_settings.php','$ses_id','user->password_settings')");

				if($noti){
					?>
					<script type="text/javascript">window.location = "index.php";</script>
					<?php
				}
			}

		}else{
			echo alert_danger('Your password and confirm password does not match. try again');
		}

	}else{
		echo alert_danger('Your old password is incorrect.');
	}
}

?>

	<h4><?php echo $ses_uname; ?> | Change Password</h4>
	<form action="" method="POST">
		<label for="opsw">Old Password</label>
		<input type="password"  required=""  name="opsw" name="opsw" placeholder="Old Password" class="info-input">

		<br>
		<label for="npsw">New Password</label>
		<input type="password" required=""  minlength="5" name="npsw" name="npsw" placeholder="New Password" class="info-input">

		<br>
		<label for="cpsw">Confirm Password</label>
		<input type="password" required=""  minlength="5" name="cpsw" name="cpsw" placeholder="Confirm Password" class="info-input">

		<br>
		<button class="btn btn-primary" name="change">Change</button>
	</form>
</main>

</body>
</html>

