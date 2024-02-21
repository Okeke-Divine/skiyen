<?php

if(isset($_POST['id'])){
	?>

<script src="../js1/jquery-latest.js" type="text/javascript"></script>

<!-- <script src="../js1/push.js" type="text/javascript"></script> -->

<!-- <script src="../js1/main.js" type="text/javascript"></script> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="shortcut icon" type="text/css" href="../logo/s1.png">
<link rel="stylesheet" type="text/css" href="../font/css/all.css">
<?php

include("../css.php");
include("../conn.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Skiyen - reset your password">
	<title>Reset Password . Skiyen</title>
</head>
<body>
    <br>
    <br>
    <br>
<?php

$id = $_POST['id'];

?>

<main class="container" role="main">
<div class="search_holder">

</div>
	<?php
	$query = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$id'");
	if(mysqli_fetch_assoc($query)){
	$query1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$id' LIMIT 0,1	");
	while($row = mysqli_fetch_array($query1)){
    $id = $row['id'];
		$uname = $row['username'];
		$pp = $row['profile_pic'];
		?>
 <div id="post_tag" class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97%;text-align: left;border:1px solid grey;">
    <div class="media text-muted pt-3">
    	<?php

    	if($pp != ""){
    		?>
    	<img src="../welcome/all_user_profile_pic/<?php echo $pp; ?>" alt="No profile pic" style="width: 50px;height: 50px;border-radius: 50%;">
<?php
}else{
	echo "No profile picture";
}
    	?>
    	<br>
    	<br>
      <h4 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">

        <strong class="d-block text-gray-dark"><?php echo $uname; ?></strong>
       <br>
     <form method="POST" class="scode">
     	<h4>Please enter your secret code.</h4>
     	<input type="hidden" name="id" value="<?php echo $id; ?>">
     	<input type="text" name="scode" class="form-control" placeholder="Secret Code...">
       <button type="submit" class="btn btn-secondary">Submit</button>
     </form>
      

		<?php
	}
}
  ?>


</body>
<style type="text/css">

</style>
</html>
	<?php
if(isset($_POST['scode'])){
	$scode = $_POST['scode'];
	$scode1 = md5($scode);
	$id = $_POST['id'];
	$select = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$id' and secret_code = '$scode1'");
	if(mysqli_fetch_assoc($select)){
		?>

		<style type="text/css">
			.scode{
				display: none;
			}
		</style>


		<form action="" method="POST">
			<label>New passowrd</label>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="scode" value="<?php echo $scode; ?>">
			<input class="form-control" minlength="5" type="" name="psw" placeholder="New password" placeholder="New password">
  			<button type="submit" class="btn btn-secondary">Save</button>
		</form>
<?php

if(isset($_POST['psw'])){
	$psw = $_POST['psw'];
	$psw1 = md5($psw);
	$id = $_POST['id'];
	$done = mysqli_query($conn,"UPDATE $user_table
		SET password = '$psw1'
		WHERE id = '$id'");
	if($done){

		mysqli_query($conn,"INSERT INTO $follow_notification VALUES ('','$id','Your password was recently changed',UNIX_TIMESTAMP(),'0','account_settings.php','$id','user->password_settings')");

		?>
		<script type="text/javascript">
			window.location = "../login?saved=true";
		</script>
		<?php
	}
}

?>
		<?php
	}else{
		?>
		<div class="alert alert-danger">You Secret Code is not correct!</div>
		<?php
	}
}
?>
</h4>
    </div>
  </div>
</main>
<?php
}else{
	echo "404";
}

?>