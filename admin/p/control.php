<?php
	

	if($ad_type == "access granted"){

		include("header.php");

		if($page == "home"){
			include("pages/home.php");
		}else if($page == "ureg"){
			include("pages/ureg.php");
		}else if($page == "visits"){
			include("pages/visits.php");
		}else if($page == "rpc"){
			include("pages/rpc.php");
		}else if($page == "sitemap"){
			include("pages/sitemap.php");
		}else if($page == "search"){
			include("pages/search.php");
		}else if($page == "logout"){
			$_SESSION['sokisjdifs_admin'] = "access denied";
			header("location:?page=login");
		}else{
			include("invalid.php");
		}

	}else{
		header("location:?page=login");
	}

?>
