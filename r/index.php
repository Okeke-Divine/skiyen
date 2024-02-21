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
  <meta name="keywords" content="skiyen,social networking">
<meta charset="utf-8">
<meta name="copyright" content="skiyen is not yet a registered trademark">
<meta name="robots" content="index,follow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="shortcut icon" type="text/css" href="../logo/s1.png">
<link rel="stylesheet" type="text/css" href="../font/css/all.css">
</head>
<body>
    <br>
    <br>
    <br>
<?php

if(isset($_GET['account'])){
$account = $_GET['account'];
}else{
  $account = "";
}

?>

<main class="container" role="main">
<div class="search_holder">
<form>
	<input style="width: 100%;" value="<?php if($account != ""){echo $account;} ?>" type="text" name="account" oninput="search_keyup()" id="search_text" name="search" placeholder="Search for your account" class="form-control" style="border-right: none;">
</form>

</div>

	<?php

if($account != ""){
	$query = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$account'");
	if(mysqli_fetch_assoc($query)){
	$query1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$account' LIMIT 0,1	");
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
     <form action="reset.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
       <button type="submit" class="btn btn-primary">Reset password</button>
       <button type="button" onclick="notme()" class="btn btn-secondary">Not Me</button>
     </form>
      </h4>
    </div>
  </div>
  <script type="text/javascript">
  	function notme(){
  		window.location = "../r/";
  	}
  </script>
		<?php
	}
}else{
  ?>
  <h4>The account <?php echo $account; ?> was not found.</h4>
  <?php
}

}else{
  ?>
  <h4>Search for your account with your full user name</h4>

  <?php
}

?>
</main>


</body>
<style type="text/css">

</style>
</html>