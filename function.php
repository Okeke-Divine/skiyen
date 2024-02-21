<?php

class write{
		public static function alert_error($text){
			$error = "<div class='alert alert-danger'>".$text."</div>";
			return $error;
		}
		public static function alert_info($text){
			$error = "<div class='alert alert-info'>".$text."</div>";
			return $error;
		}
		public static function alert_success($text){
			$error = "<div class='alert alert-success'>".$text."</div>";
			return $error;
		}
}
function html_code($text){
	return htmlentities($text);
}

function is_user_online($la){
	if($la < 61){
		return 1;		
	}else{
		return 0;
	}	
}
function post_privacy($privacy){
	//followers, me, public
	if($privacy == "me"){
		$return = "<i class='fa fa-lock'></i>";
	}else if($privacy == "followers"){
		$return = "<i class='fa fa-users'></i>";
	}else if($privacy == "public"){
		$return = "<i class='fa fa-globe'></i>";
	}else{
		$return = "undefined";
	}
	return $return;
}
function get_followers_num($my_id){
		include("conn.php");
		$doidm = "SELECT * FROM $followers WHERE following = '$my_id'";
		$que = mysqli_query($conn,$doidm);
		echo mysqli_num_rows($que);
}
function get_following_num($my_id){
	include("conn.php");
	$doidm = "SELECT * FROM $followers WHERE user_id = '$my_id'";
	$que = mysqli_query($conn,$doidm);
	echo mysqli_num_rows($que);

}
// get a users followers
function get_followers($lim,$my_id,$type){
	include("conn.php");
	if($type == "withlimit"){
		$doidm = "SELECT * FROM $followers WHERE following = '$my_id' ORDER BY id DESC LIMIT $lim";
	}else{
		$doidm = "SELECT * FROM $followers WHERE following = '$my_id' ORDER BY id DESC";
	}
	$que = mysqli_query($conn,$doidm);
	$num_rows = mysqli_num_rows($que);
	if($num_rows > 0){
	 echo "<div class='wd100 flexex'>";
		while($row = mysqli_fetch_array($que)){
			$qwert = $row['user_id'];
			$get_u = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$qwert'");
			while($row1 = mysqli_fetch_array($get_u)){
				$fpp = $row1['profile_pic'];
				$un = $row1['username'];
				?>
				<!-- the profile view -->
				<div class="profiles pointer" onclick="goto('?view=<?php echo $un; ?>');">
       				 <img src="../all_user_profile_pic/<?php echo $fpp; ?>?r=<?php echo $fpp; ?>" alt="<?php echo $un; ?>" class="my_own_pic">
					<br>
					<?php echo $un; ?>
				</div>
				<?php
			}
		}
	 echo "</div>";
	}else{
		echo "<center>No followers</center>";
	}
}
// get a who a user is following
function get_following($lim,$my_id,$type){
	include("conn.php");
	if($type == "withlimit"){
		$doidm = "SELECT * FROM $followers WHERE user_id = '$my_id' ORDER BY id DESC LIMIT $lim";
	}else{
		$doidm = "SELECT * FROM $followers WHERE user_id = '$my_id' ORDER BY id DESC";
	}
	$que = mysqli_query($conn,$doidm);
	$num_rows = mysqli_num_rows($que);
	if($num_rows > 0){
	 echo "<div class='wd100 flexex'>";
		while($row = mysqli_fetch_array($que)){
			$qwert = $row['following'];
			$get_u = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$qwert'");
			while($row1 = mysqli_fetch_array($get_u)){
				$fpp = $row1['profile_pic'];
				$un = $row1['username'];
				?>
				<!-- the profile view -->
				<div class="profiles pointer" onclick="goto('?view=<?php echo $un; ?>');">
       				 <img src="../all_user_profile_pic/<?php echo $fpp; ?>?r=<?php echo $fpp; ?>" alt="<?php echo $un; ?>" class="my_own_pic">
					<br>
					<?php echo $un; ?>
				</div>
				<?php
			}
		}
	 echo "</div>";
	}else{
		echo "<center>Not following anyone.</center>";
	}
}
function my_profile($my_id,$ses_id){
            if($my_id == $ses_id){
              return 1;
            }else{
              return 0;
            }
}
    function get_user_info($user_id,$path){
      include("conn.php");
      $p = "";
      $sql = mysqli_query($conn,"SELECT * FROM $users_info WHERE user_id = '$user_id'");
      while($row = mysqli_fetch_assoc($sql)){
        $p = $row[$path];
      }
      return $p;
    }
    function set_user_info($user_id,$path,$value){
      include("conn.php");
      $sql = mysqli_query($conn,"UPDATE $users_info SET $path = '$value' WHERE user_id = '$user_id'");
     
    }
    function get_emoji($inputid){
    	include("conn.php");
    	?>

    	<button onclick="showemoji()" style="width: 5%;" class="btn btn">&#128512;</button>

    	<div id="skiyen_emoji_modal" class="mo1" style="z-index: 100;">
		  <div class="mo-content1" style="">
		    <span class="pointer fa-2x" onclick="closeemoji()">&times;</span>
		      <?php

				  $fetch_item = "SELECT * FROM $emoji";
				  $fetched = mysqli_query($conn,$fetch_item);

				  while($row = mysqli_fetch_array($fetched)){
				    $emoji = $row['code'];
				    ?>
				    <span onclick="send_emoji('<?php echo $inputid; ?>','&#<?php echo $emoji; ?>;')" class="emoji">&#<?php echo $emoji; ?>;</span>
				    <?php
				  }

		  ?>
		  </div>
		</div>
    	<?php
    }




    function light_body(){
    	?>
    	<style type="text/css">
    		.my_def_body{
    			background-color: rgb(240,242,245)!important;
    		}
    	</style>
    	<?php
    }
    function middle_dot(){
    	return "·";
    }
    function get_user_main($id,$path){
    	include("conn.php");
    	$query = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$id' LIMIT 1");
    	while($row = mysqli_fetch_array($query)){
    		return $row[$path];
    	}
    }
    function get_user_id($name,$path){
    	include("conn.php");
    	$query = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$name' LIMIT 1");
    	while($row = mysqli_fetch_array($query)){
    		return $row[$path];
    	}
    }
    function get_post_num($my_id){
      include("conn.php");
      $get_posts = mysqli_query($conn, "SELECT * FROM $user_post WHERE user_id = '$my_id'");
      echo mysqli_num_rows($get_posts);
    }

    function get_post($post_id){
    	include("conn.php");
    	include("welcome/ses.php");
    	$get_posts = mysqli_query($conn, "SELECT * FROM $user_post WHERE id = '$post_id' and privacy != 'me'");
    	if(mysqli_num_rows($get_posts) > 0){
    		$script = '<script type="text/javascript" src="/js/jquery.timeago.js"></script>';

    		while($row = mysqli_fetch_array($get_posts)){
    			$id = $row['id'];
			    $user_id = $row['user_id'];
			    $uid = $user_id;
			    $uname = get_user_main($user_id,'username');
			    $post = $row['post'];
			    $type = $row['type'];
			    $image = $row['image'];
				$video = $row['video'];
			    $td = date("Y-m-d"." "."H:i:s",$row['time']);
			    $post_num = strlen($post);
			    $post_privacy = $row['privacy'];
			    $td_ex = date("d M Y"." "."H:i",$row['time']);


			    $one = '<div id="'.$id.'_post_div" class="my-3 br-5 p-3 bg-white shadow-sm">';


			    $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE id = '$user_id' LIMIT 0,1");
			      while($ro = mysqli_fetch_array($dat)){
			        $uid = $ro['id'];
			        $profile_pic = $ro['profile_pic'];

			                $two =  "<a href='user-images.php?user=".$uname."'><img alt='".$uname."'s profile picture' src='../all_user_profile_pic/".$profile_pic."' class='my_nav_img'></a>";
			      }
			       $three = '
        <strong class="text-gray-dark">
          <a href="profile/?view='.$uname.'" class="skiyen_black_links">'.$uname.'</a></strong> · '.post_privacy($post_privacy).'

        <i class="right">
          <time class="timeago" datetime="'.$td.'" title="'.$td_ex.'">'.$td.'</time>
        </i>

        <br>
        <div class="post_message" style="margin-top: 10px;">';


             if($type == "text"){
            if($post_num >= 150){

            $four = '<textarea readonly="" style="width: 100%;outline: 0;border: 0;resize: none;">'.substr($post,0,150).'...</textarea>';

              $four = $four . "&nbsp;&nbsp;";
              $four = $four . "<a class='readmore' href='layout.php?ssid=27380952783945720983457428039752097528094326093526384095293485728340957290348752908375093245&&sid=2352345&id=$id&&pos=$id&&continue=12994321841293470123740192834710298'>Readmore...</a></span>";
          }else{
            $four = $post;
          }

          
        }else if($type == "image"){
          $four = "";
          if(!empty($post)){
            $four =  "<h4>".$post."</h4>";
          }

      $four = $four . '<div class="post_image_container">
    <img src="../post_images_1123s/'.$uid.'_post_images/'.$image.'?r=new" alt="'.$uname.'">
  </div>
';
        }
		else if($type == "video"){
          if(!empty($post)){
            $four =  "<h4>".$post."</h4>";
          }
          $four = "";

  $four = $four . '<div class="post_video_container">
    <video controls="controls" class="post-video">
		<source src="../post_videos_issmims/'.$uid.'post_videos/'.$video.'">
	</video>
  </div><br><hr>
';
        }

        $five = '
        <div class="navabar">
        <span class="pointer" style="font-size: 15px;" onclick="post_likes('.$id.')">
       ';
    
              $num_like = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id'");
             $six = mysqli_num_rows($num_like);
              $seven = '</span><span class="right pointer" style="font-size: 15px;" onclick="view_comments('.$id.')">';
       
  
               $num_comment = mysqli_query($conn,"SELECT * FROM $post_comments WHERE post_id = '$id'");
              $total_com = 0;
              if(mysqli_fetch_assoc($num_comment)){
                 $num_comment1 = mysqli_query($conn,"SELECT * FROM $post_comments WHERE post_id = '$id'");
                 while($comment = mysqli_fetch_array($num_comment1)){
                    $total_com = $total_com+1;
                    global $total_com;
                 }
                  if($total_com > 100000){
                    $eight = "1M+";
                  }else{
                    $eight = $total_com;
                  }
              }else{
                $eight = "0";
              }

              $nine = '</span><hr><div class="navbar m0">
            <span id="'.$id.'info_like">';


      

              $check_like_btn = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id' and username = '$ses_uname'");
              if(mysqli_fetch_assoc($check_like_btn)){

$ten = ' <button id="'.$id.'" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;"
            onclick="unlike('.$id.','.$uid.')"><i class="fa fa-thumbs-up"></i>
          </button>';
              }
                else{
         $ten = '<button id="'.$id.'" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post('.$id.','.$uid.')"><i class="fa fa-thumbs-up"></i>
            </button>';

            }
            $eleven = ' </span>
              
            <button onclick="view_comments('.$id.')" class="btn btn tooltip_ski" data-tooltip="Comment" style="display: flex;"><i class="fa fa-comment" style="color: black;"></i></button>';

    
             if($type == "text"){

              $eleven = $eleven.'<a class="btn btn text-dark tooltip_ski" data-tooltip="Share to facebook" href="http://www.facebook.com/sharer.php?u=http://web-skiyen.rf.gd/&quote='.$post.'&redirect_url=http://web-skiyen.rf.gd/legal/sharer_type.php?u=facebook" target="_blank"><i class="fa fa-share"></i></a>';

              }         

          $eleven = $eleven.'
        </div>
  </div>';

              $all = $one.$two.$three.$four.$five.$six." likes".$seven.$eight." comments</div>".$nine.$ten.$eleven;

    		}

	    	$result = $all.$script;

    	}else{
    		$result = "<div class='alert alert-danger'>Post not Found.</div>";
    	}
    	return $result;
    }

    ?>