<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php

	session_start();
$setted_group = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];
include("../../ver.php");
include("../../ses.php");
include("../../../conn.php");
include("../../../css.php");
include("../../../js.php");
include("../../headers/home_group_back.php");


	?>
	<title><?php echo $null; ?></title>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
</head>
<body>


<main class="container" role="main">
	
	<br>
	<input type="text" oninput="search()" name="uname" id="uname" placeholder="Search..." class="form-control">
<br>
	<div class="flexex" id="user_get">
		
	</div>

</main>

<script type="text/javascript">
	function search(){
		var uname,result_div
		uname = _('uname').value;
		result_div = _('user_get');
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	result_div.innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "add_users-fetch.php?zqq="+uname+"&&null=<?php echo $null; ?>", true);
		  xhttp.send();
	}
	function add_user(who,who_id,my_uname){
	 xhttp = new XMLHttpRequest();	
	  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		 		 search();
		    }
		  };
	   xhttp.open("GET", "aum.php?action="+who+"&&null=<?php echo $null; ?>&&who_id="+who_id, true);
		  xhttp.send();
	}
</script>

</body>
</html>
