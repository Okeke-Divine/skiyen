<div class="white br-5 p-2 wd100 wo_box_shadow">
	
<?php

$search_userx = "SELECT * FROM $user_table WHERE username LIKE '%$item%'";
					$ee = mysqli_query($conn,$search_userx);
if(mysqli_fetch_assoc($ee)){

$search_user = "SELECT * FROM $user_table WHERE username LIKE '%$item%'";
$user_post = mysqli_query($conn,$search_user);
// loop
$total = 0;
while($user_row = mysqli_fetch_array($user_post)){
	$total = $total + 1;
		$profile_pic = $user_row['profile_pic'];
		$skiyen_username = $user_row['username']; 
		$id = $user_row['id'];
		global $id;
		$insert_searches = mysqli_query($conn,"INSERT INTO $some_searches VALUES('','$ses_uname','user','$id','$item','0',UNIX_TIMESTAMP())");
		?>

<div class="view_box">
	<div class="alert alert-secondary">
		
		<?php
			if($profile_pic != ""){
				echo "<img alt='".$skiyen_username." profile picture' src='../all_user_profile_pic/$profile_pic' style='border-radius:50%;height:30px;width:30px;;'>";
			}else{
				echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
			}
			if($id == $ses_id){
				$skiyen_username = $skiyen_username." (me)";
			}else{
				$skiyen_username = $skiyen_username;
			}
		?>

		<?php echo $skiyen_username; ?>			
	</div>
	<div class="btn_area">
		<?php

		if($id == $ses_id){
			?>
		<button onclick="window.location ='../my_profile.php';" class="btn btn-secondary">My Profile</button>

			<?php
		}else{
			?>
		<button onclick="window.location ='../profile/?view=<?php echo $skiyen_username; ?>';" class="btn btn-secondary">View Profile</button>

			<?php
		}

		?>



            <?php
if($id == $ses_id){

}else{
            $chk_follow = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$id'");

            if(mysqli_fetch_assoc($chk_follow)){
?>
              <button onclick="unfollow('<?php echo $id; ?>')" id="<?php echo $id; ?>unfollow_btn" class="btn btn-primary">Following</button>

<?php
            }else{
              ?>
              <button onclick="follow('<?php echo $id; ?>')" id="<?php echo $id; ?>follow_btn" class="btn btn-light"> Follow</button>

              <?php
            }

        }

            ?>
            <span id="<?php echo $id; ?>follow_info" class="btn btn-light" style="display: none;"></span>



	</div>
</div>
		<?php
		}
// end
}
else{
	?>
<br>
	<div class="text-dark wd100 text-center">
		<center>
			<div class="a0ka0dk empty_bg">
            	<img src="/logo/api3/common.png" alt="no user found(skiyen)">
          	</div>
		</center>
		No user found for <b><?php echo $item; ?></b>
			<ul>
				<li>Check your spelling.</li>
				<li>Try searching for a smaller item.</li>
			</ul>
		</div>

	<?php
}

?>	

</div>
<script type="text/javascript">
	  function follow(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../profile/follow.php");
      ajax.send(formdata);
      document.getElementById(id+"follow_btn").style.display = "none";
      document.getElementById(id+"follow_info").style.display = "block";
      document.getElementById(id+"follow_info").innerHTML = "Now following";
  }
   function unfollow(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","../profile/unfollow.php");
      ajax.send(formdata);
      document.getElementById(id+"unfollow_btn").style.display = "none";
      document.getElementById(id+"follow_info").style.display = "block";
      document.getElementById(id+"follow_info").innerHTML = "Unfollowed";
  }
</script>