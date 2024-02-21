<?php

if(isset($_GET['login'])){
	?>

	<div class="alert al tl alert-danger mt-1">Your username and password does not match or is invalid</div>

	<?php
}

?>
<?php

if(isset($_GET['password_wrong'])){
	?>

	<div class="alert al tl alert-danger mt-1">Invalid password.</div>

	<?php
}

?>
<?php

if(isset($_GET['user_null'])){
	?>

	<div class="alert al tl alert-danger mt-1">Username does not exits.</div>

	<?php
}

?>
<?php

if(isset($_GET['not_logged_in'])){
	if(isset($_GET['back_to'])){
	?>

		<div class="alert al tl alert-danger" style="">Please login to continue.</div>

	<?php
	}else{
	?>

		<div class="alert al tl alert-danger" style="">Please login.</div>

	<?php
	}
}

?>
<?php

if(isset($_GET['logged_out'])){
	?>

	<div class="alert al tl alert-success" style="">You have successfully logged out of your account.</div>

	<?php
}

?>
<?php

if(isset($_GET['saved'])){
	?>

	<div class="alert al tl alert-success" style="">Your password was successfully changed.</div>

	<?php
}

?>
<?php

	if(isset($_GET['relogin'])){
		?>

		<div class="alert al tl alert-danger mt-1"><b>Insecure login!</b> Please login to your account to continue.</div>


		<?php
	}
?>