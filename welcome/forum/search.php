<br>


<div class="wd100 text-dark white br-5 p-2 wo_box_shadow">



<br>

	<?php

	$results = 0;


$find = mysqli_query($conn,"SELECT * FROM $helpcenter_question WHERE deleted = '0' && question like '%$search%'  ORDER BY id DESC");

	if(mysqli_num_rows($find) > 0){
		?>
		<h5 class="mb-3"><span id="results">0</span> Results found for <?php echo $search; ?></h5>
		<hr>
		<?php
	}

	while($he = mysqli_fetch_array($find)){
		$results = $results + 1;
		$hid = $he['id'];
		$huid = $he['user_id'];
		$u = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$huid'");
		while($r = mysqli_fetch_array($u)){
			$huname = $r['username'];
			$hpp = $r['profile_pic'];
		}
		$hq = $he['question'];
		$hc = $he['closed'];
		$time = $he['time'];
		?>

		<div class="bosoks pointer" onclick="window.location = '<?php echo $hid; ?>';">
			<div class="top">
					<?php
					if(empty($hpp)){
						?>
						<i class="fa fa-user-circle text-grey" style="font-size: 40px;margin-right: 10px;margin-left: 10px;"></i>
						<?php
					}else{
						?>
				<div class="onne">
					<img src="../all_user_profile_pic/<?php echo $hpp; ?>" alt="<?php echo $huname; ?>">
				</div>
					<?php
						}
					?>
				<span onclick="window.location = '../profile/?view=<?php echo $huname; ?>';" class="pointer ft"><?php echo $huname; ?></span>
				
			</div>
			<div class="bod">
				<?php
					echo $hq; 
				?>
			</div>
		</div>
		<hr>
		<?php
	}
	if($results == 0){
		?>
	<div class="text-dark wd100 text-center">
		<center>
			<div class="a0ka0dk empty_bg">
            	<img src="/logo/api3/svg/skiyen_comm.svg" alt="no user found(skiyen)" style="width:40px;height: 40px;position: relative;top:10px;">
          	</div>
		</center>
		No item found for <b><?php echo $search; ?></b>
			<ul>
				<li>Check your spelling.</li>
				<li>Try searching for a smaller item.</li>
			</ul>
		</div>
		<?php
	}


	echo '<script>document.getElementById("results").innerHTML = '.$results.';</script>';

	?>
</div>
