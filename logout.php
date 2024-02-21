<title>Logout</title>
<?php

session_start();
session_unset();
session_destroy();

setcookie('skiyen_prev_login', $_COOKIE['skiyen_user'], time()+60*60*900);

	$new = "dfogmosdkfgoskdfogksdofkgsdkfghsd9fgjsd9fjgw84t9j23jt83wjg8wefgjsd9fgvdsjfg9sdjfg9jsdfugjsdf9g9dfshg9sdfjgsd9fgs";

	setcookie('skiyen_user', $new, time()+60*60*900+60*60*900+60*60*900);
	setcookie('skiyen_user_pp', $new, time()+60*60*900+60*60*900+60*60*900);
	

if(isset($_GET['login_method'])){
	if(isset($_GET['back_to'])){
		$back_to = $_GET['back_to'];
		header("location:login?relogin=1&&back_to=".$back_to);
	}else{
		header("location:login?relogin=1");
	}
}else{
	header("location:login?logged_out=true");
}

?>


