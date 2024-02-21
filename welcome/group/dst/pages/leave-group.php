<br>
<?php

if(isset($_GET['confirm'])){
	$confirm = $_GET['confirm'];
	if($confirm == "yes"){

		$leave_conf = mysqli_query($conn,"DELETE FROM $joined_groups WHERE gname = '$null' and user = '$ses_uname' LIMIT 1");
		if($leave_conf){
			?>

			<script type="text/javascript">
				window.location = "../../skiyen_comminicate.php";
			</script>

			<?php
		}

	}
}

?>
<div class="alert">
	<h3><?php echo $null; ?></h3>
	<h4>Are you sure you want to leave this group?</h4>
	<button class="btn btn-primary"onclick="window.location = '?action=leave-group&confirm=yes';">Yes</button>
	<button class="btn btn-secondary" onclick="window.location = 'group-settings';">No</button>
</div>