	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
		<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<?php
	session_start();
	include("../../../conn.php");
	include("../../ses.php");
	include("../../../css.php");
	include("../../headers/home_group_chat.php");
?>
<?php
if(isset($_POST['add'])){
	?>
	<script type="text/javascript">window.location = "add-users";</script>
	<?php
}
else if(isset($_POST['edit-pri'])){

	$id = $_POST['id'];

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Group - <?php echo $setted_group; ?></title>
</head>
<body>
<br><br><br>
<main class="container" role="main">
	<div class="glon">
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<select name="privacy" class="form-control">
				<option value="custom">Custom</option>
				<option value="public">Public</option>
				<option value="private">Private</option>
			</select>
			<br>
			<button class="btn btn-secondary" type="submit" name="save_group_pri">Save</button>
		</form>
	</div>
</main>

</body>
</html>

<?php

}
else if(isset($_POST['save_group_pri'])){
	$id = $_POST['id'];
	$privacy = $_POST['privacy'];
	echo "saving...";
$update = "
UPDATE $groups
SET `security` = '$privacy'
WHERE `id`= '$id';
";
$views_update = mysqli_query($conn,$update);

if($views_update){
echo '<script>window.location = "../dst";</script>';
}else{
	echo 'Try again . 503';
}
}
else if(isset($_POST['delete'])){

	$id = $_POST['id'];
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Group - <?php echo $setted_group; ?></title>
</head>
<body>
<script type="text/javascript" src="../../../js/jquery.js"></script>
   <main class="container" role="main">
   		<div class="overlay"></div>
   		<section class="post_area">
      <div class="text" style="max-height: 300px;overflow: auto;">

		<h3><span class="uppercase"><?php echo $ses_uname; ?></span>
		are you sure that you want to delete the <span class="uppercase"><?php echo $setted_group; ?></span> group</h3>
		<p><i class="fa fa-info-circle" style="color: white;font-size: 30px;"></i> You can <span class="uppercase">never</span> recover your group info or message again</p>
		<p><i class="fa fa-comment" style="color: black;"></i> <?php

		 $cid = "SELECT * FROM $setted_group";
   		 $nut = mysqli_query($group_connection_server,$cid);
    		$total = 0;
      	while($message_row = mysqli_fetch_array($nut)){
	        $totalll = array();
	        $total += 1;
	        $totalll[] += $total;
	        global $totalll;
      	}
      	foreach($totalll as $totall){
	      		echo $totall;
	    }
		?>
<br>
<i class="fa fa-eye" style="color: black;"></i> 
		<?php

$query_info = "SELECT * FROM $groups WHERE name = '$setted_group'";
$data_info = mysqli_query($conn,$query_info);
	while($row_info = mysqli_fetch_array($data_info)){
    	$views = $row_info['views'];
    	echo $views;
    }
		?>
	</p>
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<button class="btn wd-100 btn-primary btn-block" type="submit" name="delete_denied">No (Recommended)</button><br><br>
			<button class="btn wd-100 btn-danger btn-block" type="submit" name="delete_confirmed">Yes</button><br>
		</form>
	</div>
</section>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function () {
  $(".text").click(function () {
    $(".overlay").fadeIn(500);
  });
  $(".overlay").not(".text").click(function() {
    $(".overlay").fadeOut(500);
  });
});
</script>
	<?php
}
else if(isset($_POST['delete_confirmed'])){
$id = $_POST['id'];
$delete_query = "DROP TABLE $setted_group";
$deleted = mysqli_query($group_connection_server,$delete_query);
$delete_info = "DELETE FROM $groups WHERE id = '$id'";
$delete_info_query = mysqli_query($conn,$delete_info);

if($deleted && $delete_info_query){
	echo '<script>window.location = "../dst";</script>';
}else{
	echo "Try againg . 503";
}



}
else if(isset($_POST['delete_denied'])){
	echo '<script>window.location = "../dst";</script>';
}
else{
	echo '<script>window.location = "../dst";</script>';
}

?>
<style type="text/css">
	.wd-100{
		width: 100%;
	}
	.uppercase{
		text-transform: uppercase;
	}
</style>
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>