<?php

	if(isset($_GET['var'])){
		@$var = $_GET['var'];
		if($var == "username"){
			?>
				<div class="text-left m-3">
					<strong><label for="uname" class="labels">Username</label></strong>
					<input type="text" name="uname" id="uname" placeholder="Username" class="form-control">
					<button class="btn btn-primary mt-1 floatright">Next <i class="fa fa-angle-double-right"></i></button>
				</div>
			<?php
		}
	}else{
		?>
		bad request
		<?php
	}

?>
<style type="text/css">
	.labels{
		font-size: 20px;
	}
</style>
