<main class="container" role="main">
<div class="flexex">

<h3>Suggestions.</h3>
<div class="flexex">
<?php

	$following_query = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id'");
	$total = 0;
	while($row = mysqli_fetch_array($following_query)){
		$folllowers_id = $row['following'];
		$followers_following = mysqli_query($conn,"SELECT * FROM $followers WHERE following = '$folllowers_id' ORDER BY id DESC");
		

		while($row1 = mysqli_fetch_array($followers_following)){


			$folllowers_following_id = $row['following'];
			$users_info_from_followers = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$folllowers_following_id'");
			while($row3 = mysqli_fetch_array($users_info_from_followers)){
				$total = $total + 1;
				// echo '<script>_("total").innerHTML = "'.$total.'";</script>';
				$user_id = $row['id'];
				if($user_id == $ses_id){

				}else{
					$user_uname = $row3['username'];
					?>

<div class="view_box">
	<div class="alert alert-secondary">

		<?php echo $user_uname; ?>			
	</div>
<div class="btn_area">
		<button onclick="window.location ='../profile/?view=<?php echo $user_uname; ?>';" class="btn btn-secondary">View Profile</button>								
   		

            <?php

            $chk_follow = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$user_id'");
            if(mysqli_fetch_assoc($chk_follow)){
?>
              <button style="margin-top: 10px;" onclick="unfollow('<?php echo $user_id; ?>')" id="<?php echo $user_id; ?>unfollow_btn" class="btn btn-primary">Following</button>
     

<?php
            }else{
              ?>
              <button style="margin-top: 10px;" onclick="follow('<?php echo $user_id; ?>')" id="<?php echo $user_id; ?>follow_btn" class="btn btn-light"> Follow</button>

              <?php
            }

            ?>
            <span id="<?php echo $user_id; ?>follow_info" class="btn btn" style="display: none;"></span>
	</div>
</div>

					<?php
				}

			}


		}

		
	}
	if($total == 0){
		echo "No result found";
	}
?>



</main>
</div>

<div class="flexex">
