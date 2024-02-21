<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<meta charset="utf-8">
<?php
session_start();
include("../../conn.php");
include("../../css.php");
include("../ses.php");
include("../ver.php");
include("../headers/header.php");
?>
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
	<script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
	<link rel="stylesheet" type="text/css" href="../../font/css/all.css"><title><?php echo $ses_uname; ?> | Chat | <?php echo $site_name; ?></title>
	<script type="text/javascript">
		</script>
</head>
<body>

<div class="shadow-sm wd100  p-3 mb-3" id="active-users">
	
</div>


	<main class="container" role="main">

<div class="chatter1">
	<div class="left search-online-followers" id="all-friends">

	</div>
	<div class="right">
		<button class="btn btn tooltip_ski" data-tooltip="Chat Settings" onclick="chat_settings('loopchalt')"><i class="fa fa-cog"></i> <span class="nss">Chat Settings</span></button>
		
		<button onclick="starred_message()" class="btn btn tooltip_ski" data-tooltip="Starred Messages"><i class="fa fa-star"></i> <span class="nss">Starred Messages</span></button>
		<div id="messages1">
			<?php

			include("user_selector.php");

			?>
		</div>
	</div>
</div>

<div class="pointer opener">
	<i class="fa fa-angle-double-right" onclick="opena()"></i>
</div>

<div></div>



</main>
<?php
include("../../scriptify.php");
?>

<script>
	var all_f = _('all-friends');

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
	function fols(){
		my_ajax('fetch_online_f.php','active-users');
		setTimeout(fols,60000);
	}
	my_ajax('my_fols.php','all-friends');
	fols();
function closea(){
	all_f.style.left = "-500px";
}
function opena(){
	all_f.style.left = "0px";
}
function chat_settings(page){
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	Swal.fire({
				  title: 'Chat Settings',
				  html:this.responseText,
				  showCloseButton: true,
				  showCancelButton: false,
				  showConfirmButton: false
				});
		    }
		  };
		  xhttp.open("GET",page, true);
		  xhttp.send();
}
function starred_message(){
	var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
				open_skiyen_modal('Starred Messages',linkify(this.responseText));
		    }
		  };
		  xhttp.open("GET","starred_messages.php", true);
		  xhttp.send();
}
</script>
</body></html>
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>

<?php


	include("swal_action.php");

?>