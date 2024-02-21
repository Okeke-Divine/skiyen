<?php
include("../conn.php");
include("../includes/headers.php");

?>
<meta name="description" content="Register Skiyen - The multi social networking platform">
<!DOCTYPE html><link rel="stylesheet" type="text/css" href="../font/css/all.css"><html lang="en"><head><script type="text/javascript" src="../js/main.js"></script><link rel="stylesheet" type="text/css" href="../css/bootstrap.css"><link rel="shortcut icon" type="image/png" href="../logo/s1.png"><meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><title>Register . Skiyen</title><style>.bd-placeholder-img {font-size: 1.125rem;text-anchor: middle;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}@media (min-width: 768px) {.bd-placeholder-img-lg {font-size: 3.5rem;}}</style><!-- Custom styles for this template --></head><body class="text-center">
	
	<form class="form-signin" autocomplete="off" name="form" id="form" method="POST" action="process.php?i=1">
		<br><br>

<i class="fa fa-user-circle" style="color:black;font-size: 80px;"></i><h1 class="h3 mb-3 font-weight-normal">Sign Up</h1><p id="text"></p>

<?php
  if(isset($_GET['replace'])){
    ?>
    <center><div class="alert alert-danger">
      <?php echo $_GET['replace']; ?>
    </div></center>
    <?php
  } 
  ?>
  

		<label for="inputEmail" class="sr-only">Username</label><input type="text" class="form-control" id="name" placeholder="Username" autofocus name="uname"><label for="email" class="sr-only">Email</label><input type="email"  id="email" name="email" class="form-control" placeholder="Email"><label for="inputPassword" class="sr-only">Password</label><input type="password"  id="password" name="psw" onclick="readycap()" class="form-control" placeholder="Password"  style="margin-bottom: 0px;">
		<span class="reveal_password" onclick="reveal_password()" ><i id="eye" class="fa fa-eye" ></i></span>

		<br><label for="inputPassword" class="sr-only">Confirm Password</label><input type="password"  id="password1" onclick="readycap1()" name="confirmpsw" class="form-control" placeholder="Confirm Password" style="margin-bottom: 0px;"><label for="phn-no" class="sr-only">Secret Code</label><input type="text"  id="scode" name="scode" minlength="10" class="form-control" placeholder="Secret Code" title="for reseting your password when you do not have access to your gmail or phone . 10 digits">

		<input type="radio" id="male" class="checkbox" value="Male" name="gender"><lable for="male">Male</lable>
		 <input type="radio" id="female" class="checkbox" value="Female" name="gender"><label for="Female">Female</label><br>
		 <button class="btn btn-lg btn-primary btn-block" name="reg" type="submit"><i class="fa fa-sign-in-alt" style="color: white;"></i> Sign Up</button><center>Already Have An Account? <a href="../login">Sign In</a><br/></center><br><div id="error" style="color: red;"></div><div class="alert alert-success"><b>NOTE:</b><br><li>Use a valid email</li><li>Use short strong password that can be remembered by only <b>you</b></li></div>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		</form>
	<script defer type="text/javascript">const name = document.getElementById('name');const password = document.getElementById('password');const password1 = document.getElementById('password1');const phone = document.getElementById('phn');const scode = document.getElementById('scode');const email = document.getElementById('email');const form  = document.getElementById('form');const errorElement = document.getElementById('error');form.addEventListener('submit', (e) => {let messages = [];if (name.value === '' || name.value == null) {messages.push('Username is required')}if (password.value === '' || password.value == null) {messages.push('Password is required')} if (password1.value === '' || password1.value == null) { messages.push('Confirm Password is required');}if (password.value !== password1.value) {messages.push('Password and Confirm Password does not match');}if (password.value.length <= 5) { messages.push('Password must be longer than 5 characters');}if (password.value.length >= 20) {   messages.push('Password must be less than 20 characters');}if (email.value === '') {messages.push('Email is required');}if (scode.value === '') { messages.push('Secret Code is required');} if (phn.value === '') {      messages.push('Phone Number is required');} if (password.value === 'password') {     messages.push('Password cannot be password');}if (password.value === 'skiyen') {messages.push('Access Denied!');}if (password.value === '12345678') {messages.push('Password cannot be 12345678');}if (messages.length > 0) {e.preventDefault();errorElement.innerText = messages.join(', ')}})</script></body></html><style type="text/css">html,body { height: 100%;}body {display: -ms-flexbox;display: flex;-ms-flex-align: center;align-items: center;padding-top: 40px;padding-bottom: 40px;background-color: #f5f5f5;}.form-signin {width: 100%;max-width: 330px;padding: 15px;margin: auto;}.form-signin .checkbox {  font-weight: 400;}.form-signin .form-control {position: relative;box-sizing: border-box;height: auto;padding: 10px;font-size: 16px;}.form-signin .form-control:focus {z-index: 2;}.form-signin input[type="email"] {margin-bottom: -1px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;}.form-signin input[type="password"] {  margin-bottom: 10px;  border-top-left-radius: 0;  border-top-right-radius: 0;}#error{padding-bottom: 10px;}</style><script type="text/javascript">
		function _(el){
			return document.getElementById(el);
		}
	function reveal_password() {
			var x = _("password");
			var y = _("password1");
			var eye = _("eye");
			if (x.type === "password"){
				x.type = "text";
				eye.classList.add("fa-eye-slash");
			} else {
				eye.classList.remove("fa-eye-slash");
				x.type = "password";
			}
			if (y.type === "password"){
				y.type = "text";
		} else {
			y.type = "password";
		}
	}</script>
<script>function readycap(){var input = document.getElementById("password");var text = document.getElementById("text");input.addEventListener("keyup", function(event) {if (event.getModifierState("CapsLock")) {text.style.display = "block";text.style.color = "red";text.innerHTML = "CAPSLOCK is ON!";} else {text.style.display = "none"}});}function readycap1(){var input = document.getElementById("password1");var text = document.getElementById("text");input.addEventListener("keyup", function(event) {if (event.getModifierState("CapsLock")) {text.style.display = "block";text.style.color = "red";text.innerHTML = "CAPSLOCK is ON!";} else {text.style.display = "none"}});}</script><style type="text/css">.checkbox {top: 0;left: 0;height: 14px;width: 25px;background-color: blue;color: blue;}.checkbox:after {content: "";position: absolute;display: none;background: blue;} ::-webkit-scrollbar { width: 10px;}/* Track */::-webkit-scrollbar-track{  border-left:1px solid black;}/* Handle */::-webkit-scrollbar-thumb {background: #888; }/* Handle on hover */::-webkit-scrollbar-thumb:hover {background: #555;}.loader{background: lightgrey;}</style>

<style type="text/css">
	.jumbotron {
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron h1 {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}

</style>

<?php

$query = "SELECT * FROM $views";
$data = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($data)){
  $view = $row['views'];
  $new_views = $view+1;
  $update_views_skiyen = "UPDATE $views
  SET views = '$new_views'
  WHERE id = '1'
  ";
  mysqli_query($conn,$update_views_skiyen);
}

?>
  <?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','UNKNOWN this user visited the register page','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>