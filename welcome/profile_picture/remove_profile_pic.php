
<?php
$check_profile_pic = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$ses_uname' and profile_pic !='' LIMIT 1");
if($one = mysqli_fetch_assoc($check_profile_pic)){
	$p1 = $one['profile_pic'];
	$gender1 = $one['gender'];
	if($p1 != "_skiyen-boy.png"){
		if($p1 != "_skiyen-girl.png"){
			?>
<form method="POST" action="">
	<button class="btn btn text-primary" name="clear">Set Profile Picture To Default</button>
</form>
<?php
		}
	}
}
if(isset($_POST['clear'])){

$nua = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$ses_id' LIMIT 1");

while($row_pp = mysqli_fetch_array($nua)){
	$p = $row_pp['profile_pic'];
	$gender = $row_pp['gender'];
	if($gender == "Male"){
		$newImg = $skiyen_boy;
	}
	else if($gender == "Female"){
		$newImg = $skiyen_girl;
	}
}
	if($p != "_skiyen-boy.png"){
		if($p != "_skiyen-girl.png"){
			unlink('../all_user_profile_pic/'.$p);
		}
	}

        $_SESSION['user_pp'] = $newImg;

		$sql = mysqli_query($conn,"UPDATE $user_table SET profile_pic = '$newImg' WHERE id = '$ses_id'");

	echo '<script>window.location = "";</script>';

}

?>