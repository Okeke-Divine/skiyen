<div class="">
		
	<button class="right btn btn" onclick="move_window('?view');"><i class="fa fa-eye"></i> View Info</button>	



<form action="" method="POST">
	
	<h4>Edit Profile</h4>
	
	<br>

	<label for="state">State</label>
	<input type="text" name="state" id="state" placeholder="State" class="info-input">

	<br>
	<label for="country">Country</label>
	<input type="text" name="country" id="country" placeholder="Country" class="info-input">


	<br>
	<label for="db">Date Of Birth</label>
	<input type="date" name="db" id="db" placeholder="Date Of Birth" class="info-input">

	<br>
	<label for="likes">Likes</label>
	<input type="text" name="likes" id="likes" placeholder="Likes" class="info-input">

	<br>
	<label for="dlikes">Dislikes</label>
	<input type="text" name="dlikes" id="dlikes" placeholder="Dislikes" class="info-input">

	<br>
	<label for="rs">Relationship Status</label>
	<select id="rs" name="rs" class="info-input">
		<option value="" id="">Custion</option>
		<option value="single" id="single">Single</option>
		<option value="married" id="married">Married</option>
	</select>

<?php

$find_user_info = mysqli_query($conn,"SELECT * FROM $users_info WHERE user_id = '$ses_id'");
	if(mysqli_fetch_assoc($find_user_info)){

		$find_user_info = mysqli_query($conn,"SELECT * FROM $users_info WHERE user_id = '$ses_id'");
$b = "";
		while($ui = mysqli_fetch_array($find_user_info)){
			$s = $ui['state'];
			$c = $ui['country'];
			$b = $ui['bio'];
			$d = $ui['dob'];
			$l = $ui['likes'];
			$dl = $ui['dislikes'];
			$rs = $ui['relationship_status'];
			?>
			<script type="text/javascript">
				document.getElementById('state').value = "<?php echo $s;?>"; 
				document.getElementById('country').value = "<?php echo $c;?>"; 
				document.getElementById('likes').value = "<?php echo $l;?>"; 
				document.getElementById('dlikes').value = "<?php echo $dl;?>"; 
				document.getElementById('db').value = "<?php echo $d;?>"; 
				document.getElementById("<?php echo $rs; ?>").selected = "selected";
			</script>
			</script>
			<?php

}

}
			?>

	<br>
	<label for="bio">Bio</label>
	<textarea type="text" name="bio" id="bio" placeholder="Bio" class="info-input" style="height: 100px;"><?php echo $b; ?></textarea>

	<br>
	<button class="btn btn-primary" name="save">Save</button>	

</form>


</div>



<?php

	if(isset($_POST['save'])){
		$confirm = mysqli_query($conn,"SELECT * FROM $users_info WHERE user_id = '$ses_id'");
		$state = $_POST['state'];
		$country = $_POST['country'];
		$db = $_POST['db'];
		$likes = $_POST['likes'];
		$dlikes = $_POST['dlikes'];
		$rs = $_POST['rs'];
		$bio = $_POST['bio'];


		if(mysqli_fetch_assoc($confirm)){
			
			$ui2 = mysqli_query($conn,"UPDATE $users_info SET state = '$state' WHERE user_id = '$ses_id'");
			$ui1 = mysqli_query($conn,"UPDATE $users_info SET country = '$country' WHERE user_id = '$ses_id'");
			$ui3 = mysqli_query($conn,"UPDATE $users_info SET dob = '$db' WHERE user_id = '$ses_id'");
			$ui4 = mysqli_query($conn,"UPDATE $users_info SET likes = '$likes' WHERE user_id = '$ses_id'");
			$ui5 = mysqli_query($conn,"UPDATE $users_info SET dislikes = '$dlikes' WHERE user_id = '$ses_id'");
			$ui6 = mysqli_query($conn,"UPDATE $users_info SET relationship_status = '$rs' WHERE user_id = '$ses_id'");
			$ui7 = mysqli_query($conn,"UPDATE $users_info SET bio = '$bio' WHERE user_id = '$ses_id'");

				?>
				<script type="text/javascript">window.location = "?view";</script>
				<?php

		}else{
			$iinfo = mysqli_query($conn,"INSERT INTO $users_info VALUES('','$ses_id','$state','$country','$bio','$db','$likes','$dlikes','$rs')");
			if($iinfo){
				?>
				<script type="text/javascript">window.location = "?view";</script>
				<?php
			}
		}
	}

?>




