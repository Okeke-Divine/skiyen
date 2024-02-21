<?php

$chec_block = mysqli_query($conn,"SELECT * FROM $block_p_chat_user WHERE owner = '$ses_id' and  who = '$ses_rec_id'");
if(mysqli_fetch_assoc($chec_block)){
?>
			<button class="btn btn-success" onclick="window.location = '?action=unblock-user';"><i class="fas fa-user-friends"></i> Unblock <?php echo $ses_rec_uname;?></button>

<?php
}else{
	?>
			<button class="btn btn-danger" onclick="window.location = '?action=block-user';"><i class="fa fa-user-slash"></i> Block <?php echo $ses_rec_uname;?></button>

	<?php
}

?>

