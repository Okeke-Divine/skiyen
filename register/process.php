
<?php include("../conn.php");
if(isset($_POST['reg'])){
$uname = $_POST['uname'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$confirmpsw = $_POST['confirmpsw'];
if($psw != $confirmpsw){
	echo "<script>window.location = '../register/?replace= Password and confirm password do not match.';</script>";
	die();
}
$md5_psw = md5($psw);
$scode = $_POST['scode'];
$md5_scode = md5($scode);
$gen = $_POST['gender'];
$unscode = $uname.$scode;
$ver = 0;
$verc = rand(111111,999999);
$del = 0;
$dec = 0;

if($gen== "Male"){
	$pp = "_skiyen-boy.png";
}else{
	$pp = "_skiyen-girl.png";
}

		$cover_photo = "";
		$lastact = "";

$query = "SELECT * FROM $user_table WHERE username = '$uname'";
$data = mysqli_query($conn,$query);
	if(mysqli_fetch_assoc($data)){
		$rand = rand(10,10000);

		$rand1 = rand(100,100000);
		$rand2 = rand(1000,1000000);
		$rand3 = rand(10000,1000000);
		echo "<script>window.location = 'index.php?replace= Sorry the username $uname has been taken by another user, please try another name like $uname$rand, $uname$rand1 , $uname$rand2 or $uname$rand3';</script>";
	}else{
	if($uname !="" && $email!="" && $psw!="" && $scode!="" && $gen!=""){

	$register = mysqli_query($conn,"INSERT INTO $user_table (`id`, `username`, `email`, `password`, `secret_code`, `gender`, `profile_pic`, `verified`, `deactivate`, `views`, `deleted`, `time_created`, `cover_photo`, `last_activity`) VALUES (NULL,'$uname','$email','$md5_psw','$md5_scode','$gen','$pp','$ver','$dec','0','$del',UNIX_TIMESTAMP(),'$cover_photo','$lastact')");
	
	if($register){
		include("../user_security_process/login-action.php");
		if(login_user($uname,$psw,'openlogin','../welcome/startup/','../','returnstring') == 'success'){
			header("location:".login_user($uname,$psw,'openlogin','../welcome/startup/?reg=success','../','returnurl'));
		}else{
			echo "<script>window.location = '../register/?replace= Error processing request';</script>";
		}
	}
	else{
		echo "<script>window.location = '../register/?replace= Your account was not registered';</script>";
	}
}else{
	echo "<script>window.location = '../register/?replace= Please fill out all fields';</script>";
	}
}



}
?>