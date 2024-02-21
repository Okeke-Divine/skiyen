
<br>
<?php
//import { Instance } from 'cooljs'
//import * as constant from './constant'

$find_users = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' ORDER BY following");
if(mysqli_fetch_assoc($find_users)){
$find_users = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' ORDER BY following");
	while($users_r = mysqli_fetch_array($find_users)){
		$fol = $users_r['following'];
		$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$fol' ORDER BY username");

		if(mysqli_fetch_assoc($user_pro)){
		$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$fol' ORDER BY username");
		while($ur = mysqli_fetch_array($user_pro)){
			$uname = $ur['username'];
			$pp = $ur['profile_pic'];
			$id = $ur['id'];
// 
			$msg_cont = mysqli_query($conn,"SELECT * FROM $private_messages WHERE reciever = '$ses_id' and sender = '$id' and viewed = '0' ORDER BY id DESC");
			if(mysqli_fetch_assoc($msg_cont)){
				$class_btn = "chat_btn1";
			}else{
				$class_btn = "";
			}
			?>
				<button class="btn btn chat_btn <?php echo $class_btn; ?>" onclick="start_chat('<?php echo $id; ?>')">
<?php


    if(!empty($pp)){
?>

    <img src="../all_user_profile_pic/<?php echo $pp; ?>" alt="<?php echo $uname; ?>" class="chat_btn_pic">

<?php
    }else{
    	  $rand = rand(1,3);
        if($rand == 1){
          $sent_col = "#007bff";
        }else if($rand == 2){
         $sent_col = "grey";
        }
        else if($rand == 3){
         $sent_col = "green";
        }
        else{
         $sent_col = "#007bff";
        }
      include("../nup.php");
    }

?>

					<b><?php echo $uname; ?></b>
					<br>
					<?php

					$lmsg = mysqli_query($conn,"SELECT * FROM $private_messages WHERE sender = '$id' and reciever = '$ses_id' || sender = '$ses_id' and reciever = '$id'");
					if(mysqli_fetch_assoc($lmsg)){
						$lmsg = mysqli_query($conn,"SELECT * FROM $private_messages WHERE sender = '$id' and reciever = '$ses_id' || sender = '$ses_id' and reciever = '$id' ORDER BY id DESC LIMIT 1");
						while($lm = mysqli_fetch_array($lmsg)){
							$type = $lm['type'];
							$content = $lm['content'];
							$viewed = $lm['viewed'];
							$sen = $lm['sender'];
							$rec = $lm['reciever'];
							$dl = $lm['deleted'];
							if($dl == 0){
							 	echo substr($content,0,50);
							}else{
							 	echo "<i>".substr($content,0,50)."</i>";
							}
						}
					}else{
						echo "No message";
					}

					?>
					</button>

			<?php
		}
		}else{
			echo "error 0x684";
		}
	}
}else{
	$check_msg = mysqli_query($conn,"SELECT * FROM $private_messages WHERE reciever = '$ses_id'");
	if(mysqli_fetch_assoc($check_msg)){

	$check_msg = mysqli_query($conn,"SELECT * FROM $private_messages WHERE reciever = '$ses_id' ORDER BY id DESC limit 0, 1");
	while($mmmm = mysqli_fetch_array($check_msg)){
		$sender = $mmmm['sender'];
		$in = mysqli_query($conn,"INSERT INTO $followers VALUES('','$ses_id','$sender',UNIX_TIMESTAMP(),'0')");
		if($in){
			echo "Loading...";
			?>

			<meta http-equiv="refresh" content="0">

			<?php
		}
	}


	}else{		
	echo "No message found";
	}
}


?>
<br>
<br>

