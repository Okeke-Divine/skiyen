<?php

$chec_block = mysqli_query($conn,"SELECT * FROM $block_p_chat_user WHERE owner = '$ses_id' and  who = '$ses_rec_id'");
if(mysqli_fetch_assoc($chec_block)){

}else{


?>
<br>
<span>Are you sure you want to block <?php echo $ses_rec_uname; ?>?</span>
<br>
<button class="btn btn" onclick="window.location = '?action=block-user&&answer=yes';">Yes</button>
<button class="btn btn-primary" onclick="no();">No</button>
<?php

	if(isset($_GET['answer'])){
		$answer = $_GET['answer'];
		if($answer == "yes"){
			$block_user4 = mysqli_query($conn,"INSERT INTO $block_p_chat_user VALUES ('','$ses_id','$ses_rec_id',UNIX_TIMESTAMP())");
			?>
			<script type="text/javascript">
				window.location = "settings";
			</script>
			<?php
		}
	}
}
?>