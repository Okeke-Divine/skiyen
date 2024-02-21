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
	<title><?php echo $ses_uname; ?> | Groups | <?php echo $site_name; ?></title>
</head>

	

<div class="my_def_body page_body">
<body>
  	<main class="container" role="main">
	<br>
	<div class="home_cont">
	  <div class="sug_menu" id="sug_menu">
	   
	   <?php
	   include("../sidebar.php");
	   ?>
	  </div>

	  <div class="post_menu mt-3">
  		<main class="container" role="main">
		  	<div class="wd100 white br-5 text-dark p-3 wo_box_shadow">
			<span class="s9j3tmkef text-light">
				<i class="fa fa-users"></i>
		    </span>

		    Groups
		    <span class="right">
		    	<button class="btn btn fa fa-plus-circle" onclick="goto('addg.php');"></button>
		    </span>
		</div>
	  	<div id="content"></div>
	  </main>
	  
	  </div>
	  <div class="dsfgkdsa030fo">
	    <?php include("../right.php"); ?>
	  </div>
	</div>

</main>
</body>
</div>

<script type="text/javascript">
	all_groups();
	function all_groups(){
		my_ajax('all_groups.php','content');
	}
	function c_groups(){
		_("content").innerHTML = "";
		_('loader1').style.display = "block";
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
				_('loader1').style.display = "none";
		    	_("content").innerHTML = this.responseText
		    }
		  };
		  xhttp.open("GET", "c_groups.php", true);
		  xhttp.send();
	}
</script>


<script type="text/javascript">function logout(){window.location = "../../logout.php";}</script></body></html>
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>