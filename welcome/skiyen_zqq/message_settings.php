<?php
session_start();
if(isset($_REQUEST['smid'])){
	$smid = $_REQUEST['smid'];
	include("../../conn.php");
	include("../../css.php");
	include("../ver.php");
	include("../ses.php");
	$msg_cont = mysqli_query($conn,"SELECT * FROM $private_messages WHERE id = '$smid' LIMIT 1");
	while($mh = mysqli_fetch_array($msg_cont)){
		$sen =  $mh['sender'];
		$vh = $mh['viewed'];
		$reci =  $mh['reciever'];
		$cont =  $mh['content'];
		$deleted = $mh['deleted'];
		$mid = $mh['id'];
		$type = $mh['type'];
		$something = 0;
		?>
			<!-- <button class="btn btn"><i class="fa fa-star"></i> <span class="nss">Star Message</span></button> -->
			<!-- <button class="btn btn"><i class="fa fa-copy"></i> <span class="nss">Copy</span></button> -->
		<?php
		if($reci != $ses_id && $deleted == 0){
			$something = 1;
			?>
			<button class="btn btn-danger" onclick="del_msg(<?php echo $mid;?>);"><i class="fa fa-trash"></i> <span class="nss">Delete</span></button>
			<?php
		}
		if($type == "text" && $deleted == 0){
			$something = 1;
			?>
			<button class="btn btn" id="dsifjsdf" onclick="copy_msg();"><i class="fa fa-copy"></i> <span class="nss">Copy</span></button>
			<input style="opacity: 0;position: fixed;bottom:0;" type="text" readonly="" id="ofksdof" value="<?php echo $cont; ?>">
			<?php
		}
	}
	$star = mysqli_query($conn,"SELECT * FROM $private_starred_message WHERE message_id = '$mid'");
	if($deleted == 0){
		if(mysqli_fetch_assoc($star)){
			$something = 1;
			?>
			<button class="btn btn" onclick="unstar('<?php echo $mid; ?>');">
				<i class="fa fa-star-and-crescent"></i>
				<span class="nss">Starred</span>
			</button>
			<?php
		}else{
			$something = 1;
			?>
			<button class="btn btn" onclick="star('<?php echo $mid; ?>');">
				<i class="fa fa-star"></i>
				<span class="nss">Star</span>
			</button>
			<?php
		}
		
	}

	if($something == 0){
		echo "<i>Message has been deleted.</i>";
	}
}
?>
