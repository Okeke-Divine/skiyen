<?php
$query_users = mysqli_query($conn,"SELECT * FROM $user_table WHERE username like '%$item%'");
		if(mysqli_fetch_assoc($query_users)){

		$query_users = mysqli_query($conn,"SELECT * FROM $user_table WHERE username like '%$item%'");
		while($row_user = mysqli_fetch_array($query_users)){
			$my_uname = $row_user['username'];
			$gender = $row_user['gender'];
			$pp = $row_user['profile_pic'];
			if($pp == ""){
				if($gender == "Male"){
                $set_pp =  "<img alt='".$my_uname."'s profile picture' src='../all_user_profile_pic/_skiyen-boy.png' class='profile_pic_s'>";
				}else{
                $set_pp =  "<img alt='".$my_uname."'s profile picture' src='../all_user_profile_pic/_skiyen-girl.png' class='profile_pic_s'>";
				}
			}else{
                $set_pp =  "<img alt='".$my_uname."'s profile picture' src='../all_user_profile_pic/".$pp."' class='profile_pic_s'>";
			}
			?>

    		<div class="media text-muted pt-3 search_result" onclick="continue_search('<?php echo $my_uname; ?>')">
    			<?php echo $set_pp; ?> <span class="lowp"><?php echo $my_uname; ?></span>
			</div>

    			<hr>

			<?php
		}


		}else{
			?>

			<div class="media text-muted pt-3" onclick="continue_search('<?php echo $item; ?>')">
    		<?php echo $item; ?>...
			</div>

			<?php
		}

		?>