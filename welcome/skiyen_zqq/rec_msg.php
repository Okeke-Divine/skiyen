<br>
<?php
session_start();
include("../../conn.php");
include("../../js.php");
include("../../function.php");
include("../ver.php");
include("../ses.php");
include("json-chat-info.php");

//private_messages
?>
<?php
$q4 = mysqli_query($conn,"SELECT * FROM $private_messages WHERE sender = '$ses_id' and reciever = '$ses_rec_id' || reciever = '$ses_id' and sender = '$ses_rec_id' ORDER BY id ASC");

$total = mysqli_num_rows($q4);
$total = (int)$total;
$fetch_num = $total-20;
$fetch_num = (int)$fetch_num;
if($total < 20){
	$fetch_num = 0;
}
?>

        <title><?php echo $ses_uname; ?> | (<?php echo $total; ?>) <?php echo $ses_rec_uname; ?> | <?php echo $site_name; ?></title>

<?php
$sql = "SELECT * FROM $private_messages WHERE sender = '$ses_id' and reciever = '$ses_rec_id' || reciever = '$ses_id' and sender = '$ses_rec_id' ORDER BY id ASC LIMIT ".$fetch_num.",".$total;
$msg_cont = mysqli_query($conn,$sql);

if($total > 20){
	?>
	<center><a href="#" class="older-messages">older messages</a></center>
	<div class="wd100" style="height: 10px;"></div>
	<?php
}

while($mh = mysqli_fetch_array($msg_cont)){
	$sen =  $mh['sender'];
	$msg_type = $mh['type'];
	$reci =  $mh['reciever'];
	$cont =  $mh['content'];
	$deleted = $mh['deleted'];
	$mid = $mh['id'];
	$msg_viewed = $mh['viewed'];
	$msg_time = $mh['time'];
	$filtered_time = date("h:i a | M d",$msg_time);
	$sen_img = get_user_main($sen,'profile_pic');
	$sen_uname = get_user_main($sen,'username');

	if($reci == $ses_id){
		$update_viewed = mysqli_query($conn,"UPDATE $private_messages SET viewed = '1' WHERE id = '$mid'");
	}

	$un = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$sen'");
	while($f = mysqli_fetch_array($un)){
		$uo = $f['username'];
	}
	if($sen !== $ses_id){
		//other person
		echo '
			<div class="recieved-chats chatroom-boxes">
				<div class="recieved-chats-img">
					<img src="/welcome/all_user_profile_pic/'.$sen_img.'?r=cache" alt="'.$ses_uname.'\'s profile picture on skiyen">
				</div>
				<div class="recieved-msg">
					<div class="recieved-msg-inbox">';
		if($msg_type == 'text' && $deleted == 0){
			//if msg is text
			?>
				<p onclick="message_settings('<?php echo $mid; ?>');"><?php echo $cont; ?></p>
			<?php
		}else if($msg_type == 'sticker' && $deleted == 0){
			?>
				<p><img onclick="message_settings('<?php echo $mid; ?>');" src="/logo/api3/stickers/<?php echo $cont; ?>.png?r=cache"></p>
			<?php
		}else{
			echo "<i class='text-grey'>This message was deleted</i>";
		}
			echo '
					<span class="time">'.$filtered_time.'</span>
						</div>
					</div>
				</div>
			</div>
			';
	}else{
		//my message
		echo '
		<div class="outgoing-chats chatroom-boxes">
				<div class="outgoing-chats-msg">
					<div class="outgoing-msg-inbox">
		';
		if($msg_type == 'text' && $deleted == 0){
		?>
			<p onclick="message_settings('<?php echo $mid; ?>');"><?php echo $cont; ?></p>
		<?php
		}else if($msg_type == 'sticker' && $deleted == 0){
			?>
				<p onclick="message_settings('<?php echo $mid; ?>');" style="background: transparent;text-align: right;">
					<img src="/logo/api3/stickers/<?php echo $cont; ?>.png?r=cache"></p>
			<?php
		}else{
			echo "<i class='text-grey'>This message was deleted</i>";
		}
			echo '<span class="time">'.$filtered_time;
			// if msg has been viewed
			if($msg_viewed == 1 && $deleted == 0){
  				?>
  					<img src="/logo/message-box/message_read.png?r=cache" class="msg_read">
				<?php
			}

		echo '			</span>
					</div>
				</div>
			<div class="outgoing-chats-img">
				<img src="/welcome/all_user_profile_pic/'.$sen_img.'?r=cache" alt="'.$ses_uname.'\'s profile picture on skiyen">
			</div>
		</div>
		';
	}
}
	
	?>
	<!-- onclick="message_settings('<?php echo $mid; ?>');" -->
