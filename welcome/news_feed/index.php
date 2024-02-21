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
<title><?php echo $ses_uname; ?> | News Feed | <?php echo $site_name; ?></title>
</head>
<body>
	<br><br><main class="
container" role="main">

<div class="glon"><h4><i class="fa fa-newspaper" style="colot:inherit;"></i> New Feed</h4>
</div>
<div class="glon">
  <!-- <span id="news"></span> -->
	<span><iframe src="https://dailypost.ng/" style="width: 100%;height: 300px;background: transparent;border:none;outline: none;"></iframe></span>
</div>
</main>
</body>
</html>
<script type="text/javascript">
// news();
// function news() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("news").innerHTML = this.responseText;
//     }else{
//       document.getElementById("news").innerHTML = "Sorry this service is currently unavailable.";
// 	var t = setTimeout(news, 60000);
//     }
//   };
//   xhttp.open("GET.html", "https://news.google.com/topstories?hl=en-NG&gl=NG&ceid=NG:en", true);
//   xhttp.send();
// }
</script>
  <?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>