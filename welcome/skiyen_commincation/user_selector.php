<br>
<?php

// $find_users = mysqli_query($conn,"SELECT * FROM private_messages");

// if(mysqli_fetch_assoc($find_users)){
$find_users = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' || following = '$ses_id'");

$input = array();

	while($users_r = mysqli_fetch_array($find_users)){
		$fol = $users_r['following'];
		$fol1 = $users_r['user_id'];

		if($ses_id == $fol){
			$fol = $users_r['user_id'];
		}else{
			$fol = $users_r['following'];
		}

		$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$fol' ORDER BY username");

		while($ur = mysqli_fetch_array($user_pro)){
			$uname = $ur['username'];
			$uname1 = $ur['username'];
			$gender = $ur['gender'];
							if($gender == "Male"){
								$newImg = $skiyen_boy;
							}
							else if($gender == "Female"){
								$newImg = $skiyen_girl;
							}			
			$ses_rec_unamet = $uname1;
			    if(strlen($uname1) > 10){
			        $ses_rec_unamet = "<b>".substr($uname1, 0,10)."..."."</b>";
			    }else{
			        $ses_rec_unamet = "<b>".$uname1."</b>";
			    }
			$pp = $ur['profile_pic'];
			$space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$id = $ur['id'];

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
							if($type = "text"){
								if($dl == 0){
									$mes = $content;
									$ml = strlen($mes);
									if($ml > 10){
										$mes = substr($mes, 0,15)."...";
									}
								}else{
									$mes = '<i>Message deleted</i>';
								}
							}else{
								$mes = "<i>attachment...</i>";
							}
							

					}
					$msg = $space.$mes;
				}

				else{
					$viewed = 1;
					$rec = null;
					$msg = $space."<i>You are now connected.</i>";
				}
			 if(!empty($pp)){

    $img = '<img src="../all_user_profile_pic/'.$pp.'" alt="'.$uname.'" class="chat_btn_pic" style="position: relative;  top:20px;">';

    }else{
    $img = '<img src="../all_user_profile_pic/'.$newImg.'" alt="'.$uname.'" class="chat_btn_pic" style="position: relative;  top:20px;">';
    }

if($rec == $ses_id && $viewed == 0){

$notify = '<span class="right"><i class="fa fa-circle text-primary upper_noti" style="font-size: 10px;"></i></span>';
}
else{
$notify = '';
}

			$btn = "<button class='btn btn chat_btn' onclick='open_mess(".$id.")'>"
			.$img.$ses_rec_unamet."<br>".$msg.$notify.
			"</button>";
			$input[] = $btn;
		}

	}


	$input1 = array_unique($input);

	foreach($input1 as $btns){
		echo $btns;
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