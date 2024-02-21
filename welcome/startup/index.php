<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<?php 
		session_start();
	  	include("../../conn.php");
	  	include("../ses.php");
	  	include("../ver.php");
	?>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.css?r=cache">
	<link rel="stylesheet" type="text/css" href="/font/css/all.css?r=cache">
  	<title><?php echo $ses_uname; ?> | Startup | <?php echo $site_name; ?></title>
</head>
<style type="text/css">
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		display: flex;
		background: rgb(229, 229, 229);
		justify-content: center;
		align-content: center;
		min-height: 100vh;
	}
	.startup-container{
		margin-top: 10px;
		width: 80%;
		margin-bottom: 10px;
		border-radius: 10px;
		background: white;
		padding: 10px;
		align-content: center;
	}
	.form-conter{
		margin-top: 10px;
		margin-bottom: 15px;
	}
	.form-conter div{
		padding: 30px;
		display:inline-flex;
		border-radius: 50%;
		justify-content: center;
		align-content: center;
		vertical-align: middle;
	}
	.koskdfo{
		width: 10px;
		height: 10px;
		background: green;
		color: white;
	}
	.ossmdfos{
		width: 9px;
		height: 9px;
		border:1px solid green;
		color: black;
	}
</style>
<body>

	<div class="startup-container">

	<!-- 	<div class="form-conter">
			<center>
				<div class="koskdfo">1</div>
				<div class="ossmdfos">2</div>
				<div class="ossmdfos">3</div>
				<div class="ossmdfos">4</div>
				<div class="ossmdfos">5</div>
			</center>
		</div>
 -->
		<?php
			if(isset($_GET['reg'])){
		?>
		<div class="alert alert-success">You have successfully registered your account. <a href="/welcome/">Click</a> to continue.</div>
		<?php
			}
		?>


	</div>

</body>
</html>