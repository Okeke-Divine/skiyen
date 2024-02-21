<br>
<?php

if(!empty($item)){
	if($ns == "u"){
		include("user.php");
	} 
	else if($ns == "g"){
		include("group.php");
	}
	else if($ns == "f"){
		include("forum.php");
	}
}else{
	?>
	<div class="wd100 p-2 white text-dark text-center wo_box_shadow">
		<br>
		<center>
            	<img src="/logo/api3/park.png" alt="search for something(skiyen)" style="position: relative;top:2px;">
		</center>
		<span style="font-size: 20px;">
			Search for something.
		</span>
		<br>
		<br>
	</div>
	<?php
}
?>
<br>