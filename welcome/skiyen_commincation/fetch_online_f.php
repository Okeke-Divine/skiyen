<div class="container row">

<i class="fa fa-redo mt-3 mr-2 fa-1x pointer" onclick="my_ajax('fetch_online_f.php','active-users');"></i>
<?php

	session_start();
	include("../../conn.php");
	include("../ses.php");

	$find_users = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' || following = '$ses_id'");
		if(mysqli_num_rows($find_users) > 0){
			
			while($row = mysqli_fetch_array($find_users)){
				$uid = $row['user_id'];
				$foll = $row['following'];
				$all[] = $uid;
				$all[] = $foll;
			}

			$all1 = array_unique($all);
			
			foreach($all1 as $alls){
			
				$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$alls'");

				while($ur = mysqli_fetch_array($user_pro)){
					$uname = $ur['username'];
					$uid1 = $ur['id'];
					$gender = $ur['gender'];
					$last_activity = $ur['last_activity'];

					if($gender == "Male"){
						$newImg = $skiyen_boy;
					}
					else if($gender == "Female"){
						$newImg = $skiyen_girl;
					}

					$upp = $ur['profile_pic'];
					if($upp == ""){
						$pp1 = '<img src="../all_user_profile_pic/'.$newImg.'" alt="'.$uname.'" class="chat_btn_pic m-1">';
					}else{
						$pp1 = '<img src="../all_user_profile_pic/'.$upp.'" alt="'.$uname.'" class="chat_btn_pic m-1">';
					}
					$la = intval($cd1)-intval($last_activity);

					

						if($uid1 != $ses_id){


					if($la < 61){
							echo "<span class='tooltip_ski1_user pointer' onclick='open_mess(".$uid1.")' data-tooltip='".$uname."'>".$pp1."</span></i>";
					}else if($la <  200){
							echo "<span class='tooltip_ski1_user pointer' onclick='open_mess(".$uid1.")' data-tooltip='".$uname."'>".$pp1."</span>";

					}

						}

					
					}
					
				}


		}


?>
</div>