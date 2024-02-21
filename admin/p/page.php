<?php

if(isset($_GET['page'])){


	session_start();
	echo "<span style='display:none;'>";
	$ad_type = $_SESSION['sokisjdifs_admin'];
	echo "</span>";

	if(isset($ad_type)){
		$admin_logged_in = 1;
	}else{
		$admin_logged_in = 0;
	}

	$page = $_GET['page'];
	if($page == "login"){
		include("login.php");
	}else{
		if($admin_logged_in == 1){

			include("control.php");;

		}

	}

}else{
	header("location:?page=home");
}


?>