<?php

	session_start();
	include("../../conn.php");
	include("../ses.php");
	include("../../function.php");

	@$profile_id = $_GET['profile_id'];
	if($profile_id == $ses_id){
		?>

		<div style="width: 100%;" class="text-left">
			<input type="text" name="bio" maxlength="30" id="bio" value="<?php echo get_user_info($profile_id,'bio'); ?>" class="form-control">
			<button class="btn btn-primary mt-1" onclick="update_bio()">Save</button>
			<?php

      			get_emoji('bio');

      		?>
			
		</div>

		<?php
	}

?>
