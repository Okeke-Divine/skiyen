<?php

include("conn.php");
session_start();
$query = "SELECT * FROM $views";
$data = mysqli_query($conn,$query);

$total_views = 0;
while ($row = mysqli_fetch_array($data)){
	$view = $row['views'];
	$total_views += $view;
	global $total_views;
}
?>
<h1>This site has <?php echo $total_views; ?> page views.</h1>

<style type="text/css">
	html,body{
		word-wrap: break-word;
	}
</style>