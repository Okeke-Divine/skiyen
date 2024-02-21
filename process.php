<?php 
// include("conn.php");
// if(isset($_POST['loggin'])){
// 	$uname = $_POST['uname'];
// 	$back_to = $_POST['back_to'];
// 	$psw = $_POST['psw'];
// 	$psw1 = md5($psw);
// 	$query = "SELECT * FROM $user_table WHERE username = '$uname' and password = '$psw1'";
// 	$data = mysqli_query($conn,$query);
// if(mysqli_fetch_assoc($data)){
// 	$quer = "SELECT * FROM $user_table WHERE username = '$uname'";
// 	$dat = mysqli_query($conn,$quer);
// 	while($row = mysqli_fetch_array($dat)){
// 	$user_log = $row['username'];
// 	$user_id = $row['id'];
// 	$user_pp = $row['profile_pic'];
// 	$user_psw = $row['password'];
// 	session_start();
// 	session_destroy();
// 	session_start();
// 	$_SESSION['fdskafjkasdjf8iaso'] = $user_log;
// 	$_SESSION['user_id_skiyen_bot_one'] = $user_id;
// 	$_SESSION['user_pp'] = $user_pp;


// 	//encode user details for next login
// 	$encoded_password = md5(sha1(md5(sha1($user_psw))));

// 		setcookie('skiyen_user', $user_log, time()+60*60*900);
// 		setcookie('skiyen_user_password', $encoded_password, time()+60*60*900);

// 	//if login is successfull
// 	header("location:$back_to");
// }
// 	}
// 	else{
// 		//if login fails
// 		header("location:login?login=error&&back_to=$back_to");
// 	}
// }
// 	else{
// 		//if user tries to enter page without post action
// 	}
?>
<?php

	if(isset($_POST['loggin'])){
		$back_to = $_POST['back_to'];
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		include("user_security_process/login-action.php");
		// http://localhost/welcome/search/

		if(login_user($uname,$psw,'openlogin',$back_to,'','returnstring') == 'user does not exit'){
			header("location:login?user_null=true");
		}
		else if(login_user($uname,$psw,'openlogin',$back_to,'','returnstring') == 'password wrong'){
			header("location:login?password_wrong=true");
		}
		else if(login_user($uname,$psw,'openlogin',$back_to,'','returnstring') == 'success'){
			// echo login_user($uname,$psw,'openlogin',$back_to,'');
			header("location:".$back_to);
		}
	}else{
		header("location:login?api[0][error_type]=access-denied");
	}

?>