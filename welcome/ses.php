<?php
$current_date =  date("h:ia M d Y");
$cd1=strtotime($current_date);
if(isset($_GET['myid'])){
	session_start();
}echo "<span style='display:none;'>";
//this file contains all the info off the active user
if(isset($_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'])){
$setted_group = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];
global $setted_group;
}

if(isset($_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'])){
$setted_group_owner = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'];
}
global $setted_group_owner;

$ses_uname = $_SESSION['fdskafjkasdjf8iaso'];
global $ses_uname;

$ses_id = $_SESSION['user_id_skiyen_bot_one'];
global $ses_id;
//also in group chat
global $ses_user_pp;



	$get_user = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$ses_id' LIMIT 1");
	if($gu = mysqli_fetch_assoc($get_user)){
		$user_gender = $gu['gender'];
		$user_email = $gu['email'];
		$user_profile_pic = $gu['profile_pic'];
		$ses_psw = $gu['password'];
	}

	$ses_user_pp = $user_profile_pic;

	if(empty($user_profile_pic)){
		if($user_gender == "Male"){
			$newImg = $skiyen_boy;
		}
		else if($user_gender == "Female"){
			$newImg = $skiyen_girl;
		}
		$sql = mysqli_query($conn,"UPDATE $user_table SET profile_pic = '$newImg' WHERE id = '$ses_id'");
	}

echo "</span>";
if(isset($_GET['myid'])){
	echo $ses_id;
}

//check if user info exits
$ui = mysqli_query($conn, "SELECT * FROM $users_info WHERE user_id = '$ses_id'");
if(mysqli_fetch_assoc($ui)){}else{
	$uia = mysqli_query($conn,"
		INSERT INTO $users_info (`user_id`) VALUES ('$ses_id')
		");
}
?>
