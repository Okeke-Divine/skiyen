<br>
<div class="wd100 white br-5 p-2">
	<div class="flexex">
		<button class="game_btn btn access_btn" onclick="move_window('x-and-o')"> 
			<img src="img/x-and-o.PNG" style="width: 150px;height: 150px;"><br>
		X and O</button><br>
		<button class="game_btn btn access_btn" onclick="move_window('real-games/tower/')"> 
			<img src="img/tower.PNG" style="width: 150px;height: 150px;">
			<br>Tower Builder</button>

		<?php

		include("../../online-user-info.php");
		$os = UserInfo::get_device();
		if($os == "Computer"){
			?>
			<br>
		<!--<button class="game_btn btn access_btn" onclick="move_window('football')">
			<img src="img/foosball.png" style="width: 150px;height: 150px;"><br>
		 Foosball</button>//-->
			<?php
		}

		?>
		</div>
</div>