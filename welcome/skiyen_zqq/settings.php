<meta charset="utf-8">
<?php

session_start();

if(isset($_SESSION['skiyen_rec_uname'])){
	$ses_rec_uname = $_SESSION['skiyen_rec_uname'];
	$ses_rec_id = $_SESSION['skiyen_rec'];
	$ses_rec_pp = $_SESSION['skiyen_rec_pp'];
	include("../../conn.php");
	include("../../css.php");
	include("../ses.php");
	include("../ses.php");
	include("../headers/home_private_chat.php");
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
        <title><?php echo $ses_uname; ?> | <?php echo $ses_rec_uname; ?> | <?php echo $site_name; ?></title>
	</head>
	<body>
<br>

<br>
<br>
<main class="container" role="main">
		<div class="settings_div">
			<br>
			<?php
			if(isset($_GET['action'])){
				$action = $_GET['action'];
				if($action == 'block-user'){
					include('block-user.php');
				}else if($action == 'unblock-user'){
					include("unblock-user.php");
				}else{
					echo '<br>Invalid action';
				}
			}else{
				include("gen-settings.php");
		}
		?>
		</div>

	</main>

	</body>

	</html>
	<?php
}
?>
<script type="text/javascript">
	 function no(){
	 	window.location  ="settings";
	 }
</script>
