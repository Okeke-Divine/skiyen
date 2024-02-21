<?php
echo "<span style='display:none;'>";
$kill_script = 0;
$user_logged_in = 1;


include("ses.php");

//declare cookie confirmation
$is_skiyen_user = 0;
$is_skiyen_user_password = 0;

//scan cookies...

if(isset($_COOKIE['skiyen_user'])){
	$is_skiyen_user = 1;
}
if(isset($_COOKIE['skiyen_user_password'])){
	$is_skiyen_user_password = 1;
} 

$is_cookie_confirm_2 = $is_skiyen_user.$is_skiyen_user_password;

if($is_cookie_confirm_2 == 11){
	

//if user is logged in
if(isset($ses_id,$ses_uname,$ses_psw)){
	
}
else{
	//if user is not logged in but cookie is found
	if(isset($_COOKIE['skiyen_user'],$_COOKIE['skiyen_user_password'])){
		$skiyen_user = $_COOKIE['skiyen_user'];
		$new = "dfogmosdkfgoskdfogksdofkgsdkfghsd9fgjsd9fjgw84t9j23jt83wjg8wefgjsd9fgvdsjfg9sdjfg9jsdfugjsdf9g9dfshg9sdfjgsd9fgs";
		if($skiyen_user == $new){
			exit_code();
		}else{
			$kill_script = 1;
			echo "</span>";
			echo "<span style='display:none;'>";
			?>
			<div class="">Please wait...</div>
			<?php
			echo "<span style='display:none;'>";
			include("conn.php");
			include("../conn.php");
			include("../../conn.php");
			include("../../../conn.php");
			echo "</span>";
			$uname = $skiyen_user;
			$query = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$uname'");
			if(mysqli_num_rows($query)){
				while($row = mysqli_fetch_array($query)){
					$user_log = $row['username'];
					$psw_log = $row['password'];
					$user_id = $row['id'];
					$user_pp = $row['profile_pic'];
					$user_psw = $row['password'];
					
					$encoded_password_now = md5(sha1(md5(sha1($user_psw))));

					if($encoded_password_now == $_COOKIE['skiyen_user_password']){
						//if password is correct
						$_SESSION['fdskafjkasdjf8iaso'] = $user_log;
						$_SESSION['ppppppp'] = $psw_log;
						$_SESSION['user_id_skiyen_bot_one'] = $user_id;
						$_SESSION['user_pp'] = $user_pp;
						setcookie('skiyen_user', $user_log, time()+60*60*900);
						setcookie('skiyen_user_password', $encoded_password, time()+60*60*900);
						echo"<script>window.location = window.location.href;</script>";
					}else{
						//if password is wrong logout user
						echo"<script>window.location = '/logout?login_method=unsecure&&back_to='+window.location.href;</script>";
					}
				

				}
			}
			else{
				exit_code();
			}

		}
	}else{
		exit_code();
	}
}

}else{
	exit_code();
	//if only user name is found in the cookie menu forcefully log out the user
	// echo"<script>window.location = '/logout?login_method=unsecure&&back_to='+window.location.href;</script>";
	die();
}


function exit_code(){
	$user_logged_in = 0;
	echo"<script>window.location = '/login?not_logged_in=true&&back_to='+window.location.href;</script>";
}


	if($kill_script == 1){
		die();
	}
	echo "</span>";

?>