<br>
<?php
//import { Instance } from 'cooljs'
//import * as constant from './constant'

// $find_users = mysqli_query($conn,"SELECT * FROM private_messages");

// if(mysqli_fetch_assoc($find_users)){
$find_users = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' && `real` = '1' || following = '$ses_id' && `real` = '1'");
$all_uni = array();

	while($users_r = mysqli_fetch_array($find_users)){
		$fol = $users_r['following'];
		$fol1 = $users_r['user_id'];

		if($ses_id == $fol){
			$fol = $users_r['user_id'];
		}else{
			$fol = $users_r['following'];
		}

		$all_uni[] = $fol;
		global $all_uni;


		$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$fol' ORDER BY username");

		if(mysqli_fetch_assoc($user_pro)){
		$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$fol' limit 1");
		while($ur = mysqli_fetch_array($user_pro)){
			$uname = $ur['username'];
			$pp = $ur['profile_pic'];
			$id = $ur['id'];
// 
			$msg_cont = mysqli_query($conn,"SELECT * FROM $private_messages WHERE reciever = '$ses_id' and sender = '$id' and viewed = '0' ORDER BY id DESC");
			
			?>
				<button class="btn btn chat_btn" onclick="window.location = '../skiyen_zqq/add.php?rec=<?php echo $id; ?>'">
<?php


    if(!empty($pp)){
?>

    <img src="../all_user_profile_pic/<?php echo $pp; ?>" alt="<?php echo $uname; ?>" class="chat_btn_pic" style="  position: relative;  top:20px;">

<?php
    }else{
    	 ?>
    	 <i class="fa fa-user-circle" style="color: grey;font-size: 40px;position: relative;top:20px;"></i>
    	 <?php
    }

?>

					<b><?php echo $uname; ?></b>
					<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php

					$lmsg = mysqli_query($conn,"SELECT * FROM $private_messages WHERE sender = '$id' and reciever = '$ses_id' || sender = '$ses_id' and reciever = '$id' order by id desc limit 1");
					if(mysqli_fetch_assoc($lmsg)){
						$lmsg = mysqli_query($conn,"SELECT * FROM $private_messages WHERE sender = '$id' and reciever = '$ses_id' || sender = '$ses_id' and reciever = '$id' ORDER BY id DESC LIMIT 1");
						while($lm = mysqli_fetch_array($lmsg)){
							$type = $lm['type'];
							$content = $lm['content'];
							$viewed = $lm['viewed'];
							$sen = $lm['sender'];
							$rec = $lm['reciever'];
   							$td = date("Y-m-d"." "."H:i:s",$lm['time']);
							$dl = $lm['deleted'];
							if($dl == 0){
							 	echo substr($content,0,50);
							}else{
							 	echo "<i>".substr($content,0,50)."</i>";
							}
							?>
<span class="right">
	<?php

if(mysqli_fetch_assoc($msg_cont)){
	?>
	<i class="fa fa-circle text-primary upper_noti" style="font-size: 10px;"></i>
	<?php
}

	?>
</span>

<i class="right">
					<time style="font-size: 15px;" class="timeago" datetime="<?php echo $td; ?>"><?php echo $td; ?></time>
				</i>
							<?php
						}
					}else{
						echo "No message";
					}

					?>
				
					</button>

			<?php
		}
		}

	}

$find_u_t = array_unique($all_uni);
foreach($find_u_t as $fut){
	
}



?>
<br>
<br>

  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery.timeago.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    $("time.timeago").timeago();
  });
</script>