<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php
	session_start();
	include("../../conn.php");
	include("../../css.php");
	include("../ses.php");
	include("../ver.php");
	
	if(isset($_GET['zqq'])){
		$item = $_GET['zqq'];
		$ti = "(".$item.")";
		if(empty($item)){
			$ti = "";
		}
	}else{
		$ti = "";
		$item = "";
	}
	?>
	<title><?php echo $ses_uname; ?> | Search <?php echo $ti; ?> | Skiyen</title>
	<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css">
	<?php 
	include("../headers/header.php");

	if(isset($_GET['ns'])){
		$ns = $_GET['ns'];
	}else{
		$ns = "u";
	}
	?>
</head>


<div class="my_def_body page_body">
<body>
  	<main class="container" role="main">
	<br>
	<div class="home_cont">
	 
  <div class="sug_menu sug_menu1" id="sug_menu1"> 
  	<?php
  	 include("../sidebar.php");
  	?>
  </div>
  <div class="sug_menu" id="sug_menu">
    
  </div>

	  <div class="post_menu mt-3">
  		<main class="container" role="main">
		  	<div class="wd100 white br-5 text-dark p-3 wo_box_shadow">
			<span class="s9j3tmkef text-light">
				<i class="fa fa-search"></i>
		    </span>

		    Search | Explore
		</div>
		<?php include("search_creator.php"); ?>
	  </main>

	  </div>
	  <div class="dsfgkdsa030fo">
	    <?php include("../right.php"); ?>
	  </div>
	</div>

</main>
</body>
</div>	



<script>

function continue_search(item){
	var word = _('search_word').value = item;
	_('search_suggestions_div').innerHTML = ""; 
	window.location = '?zqq='+item+"&&ns=<?php echo $ns; ?>";
}
function close_div(){
	_('search_suggestions_div').style.display = "none"; 
	_('search_suggestions_div').innerHTML = ""; 
}
function ssjhfig8(){
	var word = _('search_word').value;
	if(word == ""){

	}else{
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      	document.getElementById("search_suggestions_div").style.display = "block";
        document.getElementById("search_suggestions_div").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "search_suggestions.php?zqq="+word+"&ns=<?php echo $ns; ?>", true);
    xmlhttp.send();
}
}
function start_search(){
	var word = _('search_word').value;
	if(word == ""){

	}else{
		window.location = "../search?zqq="+word+"&ns=<?php echo $ns; ?>";
	}
}
function search_from(from){
	var word = "<?php echo $item; ?>";
	window.location = "../search?zqq="+word+"&ns="+from;
}

</script>

</main>
   </body>
  </html>     
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>