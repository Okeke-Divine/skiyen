<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<?php 
session_start();
include("../../conn.php");
include("../../css.php");
include("../ses.php");
include("../ver.php");
include("../headers/chat.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
	<title><?php echo $ses_uname; ?> | Create Group | <?php echo $site_name; ?></title>
</head>
<body>
	<br>
<main class="container" role="main">
	<div class="glon">
	<h4><?php echo $ses_uname; ?> create a group</h4>

	<h6 class="text-danger">Please your group name should not contain a space or <b>'</b> or <b>"</b>. spaces should be replaced with _</h6>

	<form action="" method="POST">
		<input type="text" name="gname" placeholder="Group Name... No Space*" minlength="3" required="" class="form-control" style="margin-bottom: 10px;">
		<textarea minlength="20" required="" placeholder="Group Description..." name="des" class="form-control" style="margin-bottom: 5px;"></textarea>

		<input type="radio" name="privacy" required="" value="private">Private <input type="radio" required="" name="privacy" value="public">Public<br>

		<button class="btn point btn_ses" type="submit" name="create"><i class="fa fa-plus-circle" style="color: inherit;"></i> Create</button></form></div>
</main>
<script type="text/javascript">function logout(){window.location = "../../logout.php";}</script>
</html>
</body></html>
<?php 

if(isset($_POST['create'])){
	$time = date("h:i:sa");
	$date = date("Y/m/d");
	$gname = $_POST['gname'];
	$des = $_POST['des'];
 	$gname = filter_var($gname, FILTER_SANITIZE_EMAIL);
	$privacy = $_POST['privacy'];
	echo "</span>";

$qaz = "SELECT * FROM $groups WHERE name = '$gname'";
$done = mysqli_query($conn,$qaz);
	if(mysqli_fetch_assoc($done)){
		echo "<script>window.location = 'index.php?info= Sorry the name $gname has been taken please select another name';</script>";
	}else{
		$qaza = "INSERT INTO $groups VALUES('','$gname','$des','$privacy','$ses_uname','$time','$date','','0');";
		$work = mysqli_query($conn,$qaza);
		if($work){
			echo "<script>alert('Your group $gname was successfully created');window.location = 'index.php';</script>";
			$query_one = "

			CREATE TABLE `$gname` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`sender` VARCHAR( 255 ) NOT NULL ,
`message` TEXT NOT NULL ,
`time` VARCHAR( 255 ) NOT NULL ,
`date` VARCHAR( 255 ) NOT NULL ,
`type` TEXT NOT NULL ,
`image` TEXT NOT NULL ,
`video` TEXT NOT NULL
) ENGINE = MYISAM ;

			";
				mysqli_query($group_connection_server,$query_one);
		}else{
				echo "<script>alert('There was a problem while trying to create your group, please try again later');</script>";}
		}
	}



		?>
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>