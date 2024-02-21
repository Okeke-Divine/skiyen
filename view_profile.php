<!DOCTYPE html>
<html class="m0">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="goooglebot" content="index,follow">
	<meta name="author" name="Okeke Divine-Vessel">
	<?php

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		?>
	<title><?php echo $id; ?>: Profiles | Skiyen</title>

		<?php
	}else{
		$id = "";
		?>
		<title>Profile | Skiyen</title>
		<?php
	}
	include("css.php");
	include("conn.php");

	?>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
</head>
<body class="m0">
<div style="  background-color: rgba(0,0,0,.5);
  position: absolute;
  width: 100%;
  display: all;
  height: auto;
  z-index: 2;
  ">
<main class="container" role="main">
  <section class="post_area">
      <div class="text" style="max-height:300px;overflow: auto;width: 100%;">
      	<h3><img src="../logo/s1.png" style="width: 100px;" alt="Skiyen Logo"> <span style="position: relative;top: 11px;"> Skiyen</span></h3>
      </div>
      <div class="text" style="max-height:300px;overflow: auto;width: 100%;">

<?php
if(empty($id)){
?>
<h1>404 . Wrong URL</h1>
<?php
}else{
	$query = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$id' ORDER BY id DESC limit 0,1");
	if(mysqli_fetch_array($query)){
		$query1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$id' ORDER BY id DESC limit 0,1");
		while($row = mysqli_fetch_array($query1)){
			$uname = $row['username'];
			$gender = $row['gender'];
			$pp = $row['profile_pic'];
			$email = $row['email'];
			?>

			<?php

			if($pp == ""){
				?>
<i class="fa fa-user-circle m0" style="font-size: 50px;margin:0;padding:0;"></i>
				<?php
			}else{
				?>
				<img src="../welcome/all_user_profile_pic/<?php echo $pp; ?>" alt="<?php echo $uname; ?>'s profile picture" class="home_img">
				<?php	
			}

			?>
			<span class="vp_text"><b><?php echo $uname;?></b></span>
			<br>
			<span class="vp_text"><i class="fa fa-user"></i> <?php echo $gender;?></span>
			<br>
			<span class="vp_text">
				<i class="fas fa-envelope"></i> 
				<a href="https://mailto:<?php echo $email; ?>"><?php echo $email;?></a>
			</span>

			<?php
		}
	}else{
		?>

		<h1>404. The user <?php echo $id; ?> was not found</h1>

		<?php
	}
}

?>

      </div>
      <div class="text" style="width: 100%;overflow: auto;max-height: 300px;">
      	      	<center>
	<button class="btn btn-primary" onclick="window.location = '../login';">Login</button>
	<br>
	<strong><b>OR</b></strong>
	<br>
	<button class="btn btn-success" onclick="window.location = '../register/';">Create Account</button>
</center>
      </div>
  </section>


</main>
</div>
</body>
</html>