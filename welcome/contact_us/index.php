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
?>
<title>Contact Us . <?php echo $ses_uname; ?></title>
<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<br>
	<main class="
container" role="main">

<div class="glon"><h4><i class="fa fa-phone-alt" style="color: inherit;"></i> Contact Us</h4>
	<span style="text-transform: uppercase;"><?php echo $ses_uname; ?> thanks for contacting us. Please feel free to message us below.<br>You can also suggest on a feature that you want us to add to this site</span><br>
<form method="POST">
	<textarea required="" minlength="10" class="form-control" name="message" placeholder="Message..." style="height: 300px;"></textarea>
	<i class="fa fa-star" onclick="i()" id="i" style="color: <?php echo $rate_star; ?>;"></i>
	<i class="fa fa-star" onclick="ii()" id="ii" style="color: <?php echo $rate_star; ?>;"></i>
	<i class="fa fa-star" onclick="iii()" id="iii" style="color: <?php echo $rate_star; ?>;"></i>
	<i class="fa fa-star" onclick="iiii()" id="iiii" style="color: <?php echo $rate_star; ?>;"></i>
	<i class="fa fa-star" onclick="iiiii()" id="iiiii" style="color: <?php echo $rate_star; ?>;"></i>
	<br>
	<input type="hidden" value="0" name="rating" id="rating">
	<button name="contact" class="btn point btn_ses"><i class="fa fa-paper-plane" style="color: inherit;"></i> Send</button>

	<button type="button" class="btn point btn_ses" onclick="window.location = '../skibot/';"> Instant Message</button>
</form>
<script type="text/javascript">
	function i(){
	var i = document.getElementById("i");
	var ii = document.getElementById("ii");
	var iii = document.getElementById("iii");
	var iiii = document.getElementById("iiii");
	var iiiii = document.getElementById("iiiii");
	var rate = document.getElementById("rating");
		i.style.color = "yellow";
		ii.style.color = "inherit";
		iii.style.color = "inherit";
		iiii.style.color = "inherit";
		iiiii.style.color = "inherit";
		rate.value = "1";
	}
	function ii(){
	var i = document.getElementById("i");
	var ii = document.getElementById("ii");
	var iii = document.getElementById("iii");
	var iiii = document.getElementById("iiii");
	var iiiii = document.getElementById("iiiii");
	var rate = document.getElementById("rating");
		i.style.color = "yellow";
		ii.style.color = "yellow";
		iii.style.color = "inherit";
		iiii.style.color = "inherit";
		iiiii.style.color = "inherit";
		rate.value = "2";
	}
	function iii(){
	var i = document.getElementById("i");
	var ii = document.getElementById("ii");
	var iii = document.getElementById("iii");
	var iiii = document.getElementById("iiii");
	var iiiii = document.getElementById("iiiii");
	var rate = document.getElementById("rating");
		i.style.color = "yellow";
		ii.style.color = "yellow";
		iii.style.color = "yellow";
		iiii.style.color = "inherit";
		iiiii.style.color = "inherit";
		rate.value = "3";
	}
	function iiii(){
	var i = document.getElementById("i");
	var ii = document.getElementById("ii");
	var iii = document.getElementById("iii");
	var iiii = document.getElementById("iiii");
	var iiiii = document.getElementById("iiiii");
	var rate = document.getElementById("rating");
		i.style.color = "yellow";
		ii.style.color = "yellow";
		iii.style.color = "yellow";
		iiii.style.color = "yellow";
		iiiii.style.color = "inherit";
		rate.value = "4";
	}
	function iiiii(){
	var i = document.getElementById("i");
	var ii = document.getElementById("ii");
	var iii = document.getElementById("iii");
	var iiii = document.getElementById("iiii");
	var iiiii = document.getElementById("iiiii");
	var rate = document.getElementById("rating");
		i.style.color = "yellow";
		ii.style.color = "yellow";
		iii.style.color = "yellow";
		iiii.style.color = "yellow";
		iiiii.style.color = "yellow";
		rate.value = "5";
	}
</script>
</div>

<?php if(isset($_POST['contact'])){include("../../conn.php");$time = date("h:i:sa");$date = date("Y/m/d");$rate = $_POST['rating'];	$mess = $_POST['message']; $qaz = "INSERT INTO $contact_us VALUES('','$ses_uname','$mess','$rate','$time','$date');";echo "<span class='pae'>";$d = mysqli_query($conn,$qaz);echo "</span>";if($d){echo "<script>alert('Your message was successfully sent');window.location = '../settings.php';</script>";}else{echo "<script>alert('There was a problem while trying to send your message');</script>";}}?>


<div class="glon">
	<?php

	$er = "SELECT * FROM contact_us WHERE username = '$ses_uname' ORDER BY id DESC";
	$dqwe = mysqli_query($conn,$er);
		while($row = mysqli_fetch_array($dqwe)){
			$my_id = $row['id'];
			$mess = $row['message'];
			global $my_id;
			echo $mess."<br>";

			$q = "SELECT * FROM $rcu WHERE contact_us_id = '$my_id'";
			$der = mysqli_query($conn,$q);
			global $my_id;

			if(mysqli_fetch_assoc($der)){
			global $my_id;
				$qq = "SELECT * FROM $rcu WHERE contact_us_id = '$my_id'";
				$derr = mysqli_query($conn,$qq);

				while($rowq = mysqli_fetch_array($derr)){
					$rep = $rowq['reply'];
					global $my_id;
					echo $rep."<br>";
				}
			}else{
				echo "The admin did not reply you or ignored you message"."<br>";
			}
			echo "<br>";
		}
	

	?>
</div>

</main>
</body>
</html>
<?php

$query = "SELECT * FROM $views";
$data = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($data)){
  $view = $row['views'];
  $new_views = $view+1;
  $update_views_skiyen = "UPDATE $views
  SET views = '$new_views'
  WHERE id = '1'
  ";
  mysqli_query($conn,$update_views_skiyen);
}

?>