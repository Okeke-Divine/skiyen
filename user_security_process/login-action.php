<?php

	function login_user($username,$password,$password_type,$url,$conn_path,$return_type){
			

		include($conn_path."conn.php");

		if($password_type == 'openlogin'){
			$encoded_password_now = md5(sha1(md5(sha1(md5($password)))));
		}else{
			$encoded_password_now = $password;
		}

		$check_user = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$username'");

		if(mysqli_num_rows($check_user) > 0){

			while($row = mysqli_fetch_array($check_user)){
				$user_username = $row['username'];
				//password is initially on sha1
				$user_password = md5(sha1(md5(sha1($row['password']))));

				if($user_password == $encoded_password_now){
					//get user details
					$user_profile_pic = $row['profile_pic'];
					$user_id = $row['id'];
					//store info on session
						echo '<span style="display:none;">';
						session_start();
						echo '</span>';
					$_SESSION['fdskafjkasdjf8iaso'] = $user_username;
					$_SESSION['user_id_skiyen_bot_one'] = $user_id;
					$_SESSION['user_pp'] = $user_profile_pic;
					//store user info on cookies
					setcookie('skiyen_user', $user_username, time()+60*60*900);
					setcookie('skiyen_user_password', $encoded_password_now, time()+60*60*900);
					
					if($return_type == "returnstring"){
						return "success";
					}else{
						return $url;
					}

				}else{
					return "password wrong";
				}
			}

		}else{
			return "user does not exit";
		}

	}

?>