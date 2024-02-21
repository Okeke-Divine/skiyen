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
<title><?php echo $ses_uname; ?> | Menu | <?php echo $site_name; ?></title>
</head>
<body>


<br>
<main class="container" role="main">
<?php

if(isset($_GET['action'])){

	$ac = $_GET['action'];
	if($ac == "edit"){
		include("my-info-input.php");
	}else{
		echo "Invalid action";
	}

}else{

	include("my-info-fetcher.php");

}

?>
</main>

</body>
</html>


<br>
<br>
