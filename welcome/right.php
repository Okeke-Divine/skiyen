<div class="leftter">

<!-- <div class="br-def my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fa fa-info-circle"></i> Do you know? <span class="right"><i class="fa fa-redo pointer" onclick="get_do_you_know()"></i></span></h6>

    <div id="do_you_know">
      
    

    </div>   

</div> -->

	<div class="home-profile-container mb-2">
		<div class="home-profile-cover-photo">
			<center>
				<?php

				if(get_user_main($ses_id,'celebrity_verified') == 1){
					//verified
				?>
						<img class="home-profile-cover-photo-img2" src="/welcome/all_user_profile_pic/<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>'s profile on skiyen" >
						<img class="right-verified-img" src="/logo/verified.jpg?r=cache" alt="Skiyen verified users logo">
				<?php
					}else{
					 //not verified
				?>
						<img class="home-profile-cover-photo-img1" src="/welcome/all_user_profile_pic/<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>'s profile on skiyen" >
				<?php
					}
				?>
			</center>
		</div>
		<div class="home-profile-lower-div-info">
			<center>
				<b><?php echo $ses_uname; ?></b><br>
				<span class="text-grey">@<?php echo $ses_uname; ?></span><br>

				<div class="w3-container  text-grey mt-3 right-profile-div-down">
					<div class="w3-third border-right-gray pt-2">
						Posts
						<br>
						<?php get_post_num($ses_id); ?>
					</div>
					<div class="w3-third border-right-gray pt-2">
						Following
						<br>
						<?php get_following_num($ses_id); ?>
					</div>
					<div class="w3-third pt-2">
						Followers
						<br>
						<?php get_followers_num($ses_id); ?>
					</div>
				</div>

			</center>
		</div>
	</div>

	<div class="text-grey home-epxlpl mt-2">
		&copy;<?php echo date("Y"); ?> <?php echo $site_name; ?>
		<hr style="margin-top:10px;margin-bottom:10px;">
		<a href="#">About</a> | 
		<a href="/contact_us/">Contact Us</a> | 
		<a href="/our-team/">Developers</a>
	</div>

</div>

