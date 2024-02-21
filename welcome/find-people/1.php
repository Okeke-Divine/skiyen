
<div class="white mt-3 br-5 p-2 wo_box_shadow">
<?php


$results_per_page = 10;
$total = 0;

	$sql = "SELECT * FROM $user_table";
	$result = mysqli_query($conn,$sql);
	$number_of_results = mysqli_num_rows($result);

	$number_f_pages = ceil($number_of_results/$results_per_page);

	if(!isset($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	}

	$this_page_first_result = ($page-1)*$results_per_page;
	echo '<div class="row align_center">';

	$users_info_from_followers = mysqli_query($conn,"SELECT * FROM $user_table ORDER BY last_activity DESC LIMIT ". $this_page_first_result.",". $results_per_page);
			while($row3 = mysqli_fetch_array($users_info_from_followers)){
					$user_id = $row3['id'];
					$user_uname = $row3['username'];
					$pp = $row3['profile_pic'];
					if($ses_id != $user_id){
			

					$chk_follow = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$user_id'");
					    if(mysqli_fetch_assoc($chk_follow)){}else{
					              ?>

					<div class="view_box col-md-5">
						<div class="alert alert-secondary">
					        <img src="../all_user_profile_pic/<?php echo $pp; ?>?r=<?php echo $pp; ?>" alt="<?php echo $user_uname; ?>" class="my_nav_img">

							<?php echo $user_uname; ?>			
						</div>
						<div class="btn_area">
							<button onclick="window.location ='../profile/?view=<?php echo $user_uname; ?>';" class="btn btn-secondary">View Profile</button>
					   		

						<span id="<?php echo $user_id; ?>main">
					              <button onclick="follow('<?php echo $user_id; ?>')" id="<?php echo $user_id; ?>follow_btn" class="btn btn-light"> Follow</button>

					              </span>


					        
						</div>
					</div>

					              <?php
					}
					            ?>
					        

					<?php
				}

			}
?>
<br>
<div style="display: block;" class="wd100 ml-3">
<?php
	for($page=1;$page<=$number_f_pages;$page++){
		echo '<a href="?page='. $page .'" class="fa-1x">' . $page . '</a> ';
	}
	echo '</div>';
?>
</div>


</div>
