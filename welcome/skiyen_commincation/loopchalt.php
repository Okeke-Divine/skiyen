<?php

	session_start();
	include("../../conn.php");
	include("../ses.php");

?>
	<!-- box 1 -->
<div class="wd100 text-left">
	<span class="skiyen_chat_settings_label">Chat Background</span>
	<?php

	$ucimg = mysqli_query($conn,"SELECT * FROM $user_global_settings WHERE user_id = '$ses_id' and settings = 'chat_background' and settings_value != ''");
	if(mysqli_num_rows($ucimg) == 1){
		while($row = mysqli_fetch_assoc($ucimg)){
			$img =  $row['settings_value'];
		}
		?>
		<img src="/<?php echo $welcome_dir; ?>/all_chat_bg/<?php echo $img; ?>" class="img-thumbnail" alt="chat Background">
		<?php
	}else{
		?>
		<img src="/logo/atrium.jpg" class="img-thumbnail" alt="chat Background">
		<?php
	}

	?>
	<div class="">
		<form action="cbg.php" method="POST" enctype="multipart/form-data">
			<input type="file" class="form-control mt-1" name="fileToUpload">
			<button class="btn btn-primary mt-2" name="change">Set</button>

			<button class="btn btn" type="button" onclick="chat_settings('loopchalt1')">Next <i class="fa fa-angle-double-right"></i></button>
		</form>
	</div>
<!-- close box 1 -->
</div>