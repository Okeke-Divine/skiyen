<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<?php session_start();include("../ver.php");include("../ses.php");include("../../conn.php");include("../../css.php");include("../headers/find_people.php");?><!DOCTYPE html><html><head><link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css"><link rel="stylesheet" type="text/css" href="../../font/css/all.css"><title>Chat . <?php echo $ses_uname; ?></title></head><body>
	<?php

		$into = $_GET['into'];
		if(!empty($into)){
		?>
<div class="division"></div>
		<div class="glon m0"><h4>Are you sure that you want to join the <b><?php echo $_GET['into']; ?></b> group?</h4>
		<input type="hidden" name="rname" value="<?php echo $_GET['into']; ?>">
		<button onclick="window.location = '../';" class="btn point access_btn"><i class="fa fa-angle-double-left" style="color: inherit;"></i> No</button> <button onclick="window.location = 'dst/add.php?rname=<?php echo $_GET['into']; ?>';" class="btn point access_btn">Yes <i class="fa fa-angle-double-right" style="color: inherit;"></i></button>

</div>
		<div class="division"></div>
		<?php
	}

	?>
		

<script type="text/javascript">function logout(){window.location = "../../logout.php";}</script></body></html>
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>