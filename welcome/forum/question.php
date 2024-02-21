<?php
	
	if(isset($_POST['qa'])){
		$qa = $_POST['qa'];
		if(empty($aaaa)){
			$aaaa = mysqli_query($conn,"
			INSERT INTO $helpcenter_answer (
					`id` ,
					`qid` ,
					`user_id` ,
					`content` ,
					`time`
					)
					VALUES (
					NULL , '$hhid', '$ses_id', '$qa', UNIX_TIMESTAMP()
					);");
		}
	}


	$find = mysqli_query($conn,"SELECT * FROM $helpcenter_question WHERE deleted = '0' && id = '$hhid' ORDER BY id DESC LIMIT 1");
	$helps = 0;

	while($he = mysqli_fetch_array($find)){
		$helps = $helps+1;
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
		<br>
		<div class="wd100 text-dark white br-5 p-2 wo_box_shadow">
			<div class="top sokskosk">
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
				
				<?php

				if($huid == $ses_id){
					?>
					<span onclick="deleted_que('<?php echo $hid; ?>');" class="pointer right"><i class="fa fa-trash-alt"></i></span>
					
					<span id="<?php echo $hid; ?>_now_div1" class="right badge-danger sdokdo pt-1" style="display: none;">Question deleted</span>
					<?php
				}

				?>
			</div>
			<div class="bod">
				<?php
					echo $hq; 
				?>
			</div>
			<div class="rec1">
				<div class="in">
					<form action="" method="POST">
						<textarea type="text" name="qa" id="qa" placeholder="Reply..." class="form-control" title="Press enter to send."></textarea>
						<button type="submit" class="btn btn-success mt-1">submit</button>
					</form>
				</div>
			</div>
			<div class="rec">
				<br>
				<div class="all">
					<?php

					$answer = mysqli_query($conn,"SELECT * FROM $helpcenter_answer WHERE qid = '$hhid' ORDER BY id DESC");
					while($ans = mysqli_fetch_array($answer)){
						$hacon = $ans['content'];
						$hauid = $ans['user_id'];
						$ua = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$hauid'");
						while($h = mysqli_fetch_array($ua)){
							$hauname = $h['username'];
							$happ = $h['profile_pic'];
						}
						$haid = $ans['id'];
						$hatime = $ans['time'];
						?>
						<div class="wd100 ossok" id="<?php echo $haid; ?>_now_div">
							
					<?php
					if(empty($happ)){
						?>
						<i class="fa fa-user-circle text-grey" style="font-size: 40px;margin-right: 10px;margin-left: 10px;"></i>
						<?php
					}else{
						?>
				<div class="onneq">
					<img src="../all_user_profile_pic/<?php echo $happ; ?>" alt="<?php echo $hauname; ?>">
				</div>
					<?php
						}
					?>
				<span onclick="window.location = '../profile/?view=<?php echo $hauname; ?>';" class="pointer ft sdokdo"><?php echo $hauname; ?></span>
				<?php

				if($hauid == $ses_id){
					?>
					<span onclick="deleted_ans('<?php echo $haid; ?>');" class="pointer sdokdo right"><i class="fa fa-trash-alt"></i></span>
					<?php
				}

				?>
<br>
							<div class="hacon"><?php echo $hacon; ?></div>
						</div>
						<?php
					}

					?>
				</div>
			</div>
		<br>
		</div>
		<br>
		<?php
	}
	if($helps == 0){
		echo "<br>".write::alert_info('Question not found.');
	}
?>
<script type="text/javascript">
	function _win(){
		window.location = "";
	}
	function deleted_ans(id){
		var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","delete_ans.php?id="+id);
      ajax.send(formdata);
      _(id+'_now_div').style.display = "none";
	}
	
</script>
		<script type="text/javascript">
	function _win(){
		window.location = "";
	}
	function deleted_que(id){
		var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","delete_que.php?id="+id);
      ajax.send(formdata);
      _(id+'_now_div1').style.display = "block";
	}
	
</script>