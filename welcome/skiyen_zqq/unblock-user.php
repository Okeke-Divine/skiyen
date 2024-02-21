<?php
$chec_block = mysqli_query($conn,"SELECT * FROM $block_p_chat_user WHERE owner = '$ses_id' and  who = '$ses_rec_id'");
if(mysqli_fetch_assoc($chec_block)){
?>
<br>
<span>You are about to unblock <?php echo $ses_rec_uname; ?>.</span><br>
<button class="btn btn-primary" onclick="window.location = '?action=unblock-user&&answer=yes';">Confirm</button>
<button class="btn btn" onclick="no();">Cancel</button>
<?php

	if(isset($_GET['answer'])){
		$answer = $_GET['answer'];
		if($answer == "yes"){
			$chec_block = mysqli_query($conn,"SELECT * FROM $block_p_chat_user WHERE owner = '$ses_id' and  who = '$ses_rec_id'");
			while($rowb = mysqli_fetch_array($chec_block)){
				$delid =  $rowb['id'];
				$delc = mysqli_query($conn,"DELETE FROM $block_p_chat_user WHERE `id` = $delid LIMIT 1");
			}
			?>
			<script type="text/javascript">
				window.location = "settings";
			</script>
			<?php
		}
	}
}else{

}
?>