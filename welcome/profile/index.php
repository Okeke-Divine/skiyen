<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
<script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
<?php 


session_start();
include("../../conn.php");
include("../ses.php");
include("../ver.php");

@$for = $_GET['view'];
$fetch_main = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$for'");
if(mysqli_fetch_assoc($fetch_main)){

}else{
  @$pending = $_GET['viewid'];
  $fetch_main = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$pending'");
  if($rr = mysqli_fetch_assoc($fetch_main)){
    $for =  $rr['username'];
    $profile_pic = $rr['profile_pic'];
  }else{
    ?>
    <script type="text/javascript">
      swal.fire('404','User does not exit','error');
    </script>
    <?php
  }
}


$fetch = "SELECT * FROM $user_table WHERE username = '$for'";
$ced = mysqli_query($conn,$fetch);
while($views_row = mysqli_fetch_array($ced)){
	$views = $views_row['views'];
    global $views;
}
$viewss = (int)$views+1;


if($for != $ses_uname){
  $update_views = "UPDATE $user_table
SET views = '$viewss'
WHERE username = '$for'";
$real_time_update = mysqli_query($conn,$update_views);
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/font/css/all.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css?r=cache">
<link rel="stylesheet" type="text/css" href="../../font/css/v4-shims.css?r=cache">
  <?php 
  include("../../css.php");
  include("../headers/header.php");
  ?>
</head>
<body>

  <!-- scroll to top btn -->
    <div class="upper_btn1" id="upper_btn" onclick="window.location = '#';">
      <i class="fa fa-caret-up"></i>
    </div>
<!-- end -->


  <title><?php echo $for; ?>'s profile | Skiyen</title>
  <script type="text/javascript" src="/js/jquery.js?r=cache"></script>
  <script type="text/javascript" src="/js/jquery.timeago.js?r=cache"></script>

	<br>
<center>
		<?php


		include("../../conn.php");

			$query = "SELECT * FROM $user_table WHERE username = '$for' LIMIT 0,1";
			$data = mysqli_query($conn,$query);

			if(mysqli_num_rows($data) == 1){

				while($row = mysqli_fetch_array($data)){
          // get the users data
          $uid = $row['id'];
          $my_id = $uid;
          global $my_id;
					$my_uname = $row['username']; 
					$my_gender = $row['gender']; 
					$my_profile_pic = $row['profile_pic'];
					$my_views = $row['views'];
					$my_cover_photo = $row['cover_photo'];
          $my_last_activity = $row['last_activity'];
          if($my_last_activity == ''){
            $show_last_activity = 0;
            $my_last_activity_in_date = '';
          }else{
            $show_last_activity = 1;
            $my_last_activity_in_date = date("Y-m-d"." "."H:i:s",$my_last_activity);
          }
          // end of user info

          // last activity num
          $la = intval($cd1)-intval($my_last_activity);
					
          //function to check if this is my profile

            include("validate-user.php");

          //end of function

					?>
          <br>
      	<div class="cpc">
                <img src="../all_user_cover_photo/black.png?r=cache" class="msmsomso">
                <?php
                if(my_profile($my_id,$ses_id) == 1){
                  ?>
                <button class="btn cover_photo_edit">
                  <i class="fa fa-camera"></i> <span class="nss">Edit Cover Photo</span>
                </button>
                <?php
                }
                ?>
        </div>
    		    

            <!-- users profile picture -->
            <?php
						if($my_profile_pic != ""){
								 ?>

                <center>
                  <a href='../user-images.php?user=<?php echo $my_uname; ?>'>     <img alt='<?php echo $my_uname; ?>' src='../all_user_profile_pic/<?php echo $my_profile_pic; ?>?r=<?php echo $my_profile_pic; ?>' class="siddsoj">
                </a>
              </center>
                <?php
                	}
						?>
            <!-- end of users profile picture -->
            <?php

            //edit profile picture button

            if(my_profile($my_id,$ses_id) == 1){
              ?>
                <div onclick="move_window('../profile_picture/')" class="profile_picture_edit_logo pointer"><center><i class="fa fa-camera def_edit"></i></center></div>
              <?php
            }else{
              ?>
                <div style="opacity: 0!important;" class="profile_picture_edit_logo"><center><i class="fa fa-camera def_edit"></i></center></div>
              <?php
            }

            //end of profile picture button


            ?>
           
            <!-- move page content a little bit up with Ty4j div -->

            <div class="Ty4j">
           <!-- username -->
          <center><span class="user_name"><b><?php echo ucfirst($my_uname); ?></b></span></center>
						<!-- user_bio -->
            <span class="user_bio">
              <i id="my_bio"><?php echo get_user_info($my_id,'bio'); ?></i>
               <!-- edit bio -->
                <?php if(my_profile($my_id,$ses_id) == 1){?>
                  <br><a href="javascript:void(0)" onclick="popup('profile-add-bio.php?edit','Edit Bio')">Edit</a>
                <?php } ?>
               <!-- follow other users -->
               <span class="user_follow">
                <?php include("follow-user.php"); ?>
              </span>
            </span>
            <?php
            if($show_last_activity == 1){
              ?>
              <!-- <span class="">
                <b>Last activity:</b> 
                <time class="timeago" datetime="<?php echo $my_last_activity_in_date; ?>" title="<?php echo $my_last_activity_in_date; ?>"><?php echo $my_last_activity_in_date; ?></time>
              </span> -->
              <?php
            }?>
           
            
           
            <main class="container" role="main"><hr></main>

            <div class="user_controls_div" id="user_controls_div">
              <button class="btn btn">
                <!-- user is online or not -->
                <?php
                if(is_user_online($la) == 1){
                    echo "<span class='fa fa-circle text-success'></span> Online";
                }else{
                    echo "<span class='fa fa-circle text-danger'></span> Offline";
                }
                ?>
                <?php

                

                ?>
              </button>

              <button class="btn btn" id="postbtn" onclick="my_posts('scroll');">Posts</button>
              <button class="btn btn" id="followersbtn" onclick="get_followers();">
                Followers
                <span class="badge text-gray"><?php echo get_followers_num($my_id); ?></span>
              </button>
              <button class="btn btn" id="followingbtn" onclick="get_following();">
                Following
                <span class="badge text-gray"><?php echo get_following_num($my_id); ?></span>
              </button>

            <?php
             if(my_profile($my_id,$ses_id) == 1){
            ?>
            <!-- edit profile -->
              <!-- <button class="btn btn s_col-bg_light"><i class="fa fa-pen"></i> Edit Profile</button> -->
            <?php } ?>
            </div>
            <br>
          </center>

            <!-- open second body -->
            <div class="second_boby">

              <main class="container" role="main">
                <div class="msdfomg">
                  <!-- left -->
                  <div class="owkq9kiw">
                   <?php include("profile-left.php"); ?>
                  </div>
                  <!-- right -->
                  <div class="s2394o234231" id="s2394o234231">
                    <span class="spinner-border text-primary"></span>
                  </div>
              </main>
              <br>
            </div>
            <!-- close second body -->


      </div>
          </center>
          </div>
      </h4>
    </div>
  </div>
</center>
				</center>
					<?php
			}
		}

		?>
		<center>
	</div>
</center>
	</div>
</div>
</div>
	<br>


	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

  
  //get scripts for this page
  include("scripts.php");

?>
<div id="scripts"></div>