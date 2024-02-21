
<br>
<div class="wd100 text-dark white br-5 p-2 wo_box_shadow">
<br>
<?php

  include("query.php");

?>
	<h4>Forum</h4>
<form action="" method="POST">
	<textarea class="form-control" name="ask" oninput="c()" id="ask" placeholder="Ask a question..."></textarea>
	<button class="btn btn-success mt-1">Ask</button>
	<span class="right sk-grey" id="word_count">0</span>
</form>
<br>
</div>





<br>
<div class="whole_help">
	<?php

	$find = mysqli_query($conn,"SELECT * FROM $helpcenter_question ORDER BY id DESC LIMIT 0,10");
	$helps = 0;



	while($row = mysqli_fetch_array($find)){
		$helps = $helps+1;
		$hid = $row['id'];
		$huid = $row['user_id'];
		$u = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$huid' LIMIT 1");
		while($r = mysqli_fetch_array($u)){
			$hhuname = $r['username'];
			$hhpp = $r['profile_pic'];
		}
		$hq = $row['question'];
		$hc = $row['closed'];
		$time = $row['time'];
		?>

		<div class="wd100 text-dark white br-5 p-2 wo_box_shadow pointer" onclick="window.location = '<?php echo $hid; ?>';">
			
				<div class="top">
				<div class="onne">
					<img src="../all_user_profile_pic/<?php echo $hhpp; ?>" alt="<?php echo $hhuname; ?>">
				</div>
				
				<span class="sijsij" onclick="window.location = '../profile/?view=<?php echo $huname; ?>';" class="pointer ft"><?php echo $hhuname; ?></span>
				
				</div>
				<div class="ml-2">
				<?php
					echo $hq; 
				?>
				</div>
				<span class="text-grey right">
					<?php
						$find_a = mysqli_query($conn,"SELECT * FROM $helpcenter_answer WHERE qid = '$hid' ORDER BY id DESC LIMIT 1");

							$yep = 0;

							while($he = mysqli_fetch_array($find_a)){
								$yep = $yep + 1;
							}
							echo $yep." replies";

					?>
				</span>



		<br>
		</div>
		<br>
		
		<?php
	}
	if($helps == 0){
		echo "<br>".write::alert_info('No question found.');
	}

	?>
</div>

		