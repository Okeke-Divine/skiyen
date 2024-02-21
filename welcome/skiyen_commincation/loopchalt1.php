<?php

	session_start();
	include("../../conn.php");
	include("../ses.php");

?>
	<!-- box 1 -->
<div class="wd100 text-left">
	<span class="skiyen_chat_settings_label">Textarea</span>
	<?php

	$ucimg = mysqli_query($conn,"SELECT * FROM $user_global_settings WHERE user_id = '$ses_id' and settings = 'chat_submit_text' and settings_value != ''");
	if(mysqli_num_rows($ucimg) == 1){
		while($row = mysqli_fetch_assoc($ucimg)){
			$img =  $row['settings_value'];
		}
		?>
		Submit button must be used to send.		
		<?php
	}else{
		?>
		Entet key is send.
		<?php
	}

	?>
	<div class="">
		<form action="ek.php" method="POST" enctype="multipart/form-data">
				<select class="custom-select" name="key">
					<option disabled="">Select Type</option>
					<option value="ekis">Enter key is send</option>
					<option value="sbiutos">Submit button is used to send</option>
				</select>

			<button class="btn btn-primary mt-2" name="set">Set</button>

			<button class="btn btn" type="button" onclick="chat_settings('loopchalt')">Previous <i class="fa fa-angle-double-left"></i></button>
			<button class="btn btn" type="button" onclick="chat_settings('loopchalt2')">Next <i class="fa fa-angle-double-right"></i></button>
		</form>
	</div>
<!-- close box 1 -->
</div>