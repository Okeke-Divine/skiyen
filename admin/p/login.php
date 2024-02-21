<br>
<main class="container">
<form action="" method="POST">
	<h3>Login</h3>
	<input type="text" name="uname" placeholder="Username" class="form-control" required="">
	<br>
	<input type="password" name="psw" placeholder="Password" class="form-control" required="">
	<br>
	<button class="btn btn-primary p-2">Login</button>
</form>
</main>

<?php
// 
	session_start();
			$_SESSION['sokisjdifs_admin'] = "access granted";
	// 
	if(isset($_POST['uname'],$_POST['psw'])){
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		if($uname == "admin" && $psw == "skiyen-password"){
			$_SESSION['sokisjdifs_admin'] = "access granted";
			header("location:?page=home");
		}else{
			$_SESSION['sokisjdifs_admin'] = "access denied";
		}
	}

?>