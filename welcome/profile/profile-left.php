<div class="br10 bg-white shadow-sm p-2">
	<span class="dokdfsokefmfdfsw3"><b>Intro</b></span>
	<?php
	if(my_profile($my_id,$ses_id) == 1){
		?>
		<span class="right pointer dskjoda9r3i24o text-primary" onclick="goto('../menu/e~edit-intro')">Edit Intro</span>
		<?php
	}
	?>
	<br>
	
</div><br>

<div class="br10 bg-white shadow-sm p-2">
	<span class="dokdfsokefmfdfsw3"><b>Following</b></span>
		<span class="right pointer dskjoda9r3i24o text-primary" onclick="get_following()">See All Following</span>
	</span><br>
	<span class="text-gray"><?php echo get_following_num($my_id); ?> Following</span><br>
	<?php
	$lim = 3;
	get_following($lim,$my_id,'withlimit');
	?>
</div><br>

<div class="br10 bg-white shadow-sm p-2">
	<span class="dokdfsokefmfdfsw3"><b>Followers</b></span>
		<span class="right pointer dskjoda9r3i24o text-primary" onclick="get_followers()">See All Followers</span>
	</span><br>
	<span class="text-gray"><?php echo get_followers_num($my_id); ?> Followers</span><br>
	<?php 
	get_followers($lim,$my_id,'withlimit');
	?>
</div><br>