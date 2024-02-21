<?php
session_start();
if(isset($_SESSION['fdskafjkasdjf8iaso'])){
	header("location:welcome/?logged_in=true");
}

?>
<!DOCTYPE html>
<html>
<title>Login - Skiyen</title>
<head>

	<title>Login</title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body>

	<div class="whole">
		<div class="box left">
			<div class="wd ">
				image...
			</div>
		</div>
		<div class="box right">
			<div class="wd logina white">
				<center><h3 class="title_style">Skiyen</h3></center>
				<br>
				<input type="text" name="" class="form-control" placeholder="Username">
				<Br>
				<input type="password" name="" class="form-control" placeholder="Password">
				<br>
				<button class="btn btn-primary wd100 lb">Login</button>

			<hr class="hr_def">
			Or
			<hr class="hr_def">

			<center>
			<a href="#">Forgotten Password</a>
		</center>

			</div>


		</div>
	</div>

	
</body>
</html>
<style type="text/css">
	.lb{
		opacity: 0.2;
	}
	.wd100{
		width: 100%;
	}
	body{
		margin: 0;
		padding: 0;
		background: #f5f7fb;
	}
	.whole{
		margin:20px; 
		width:95%;
		height: auto;
		display: flex;
	}
	.box{
		width: 100%;
	}
	@media(max-width: 600px){
		.whole{
			display: block;
			padding: 10px;
		}
		.box{
			width: 100%;
		}
		.white{
			width: 98%;
			margin-bottom: 10px;
			height: 400px;
		}
	}
	.wd{
		width: 96%;
		padding: 10px;
		margin: 10px;
		height: 450px;
	}
	.white{
		background: white;
	}
	h3{
		font-family:Colonna MT;
		font-size: 70px;
		font-weight: bold;
	}
	.logina{
		padding: 20px;
	}
	.hr_def{
		width:46%;
		position: relative;
		top:10px;
		display: inline-flex;
	}
</style>