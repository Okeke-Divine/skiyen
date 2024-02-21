  <script type="text/javascript" src="../js/jquery.timeago.js"></script>
 <?php

    session_start();
  include("../conn.php");
  include("ses.php");


  $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE privacy = 'followers' || privacy = 'public' ORDER BY id DESC");

  $all_post_now = array();
$bundle = 0;
  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $uname = $row['username'];
    $post = $row['post'];
    $type = $row['type'];
    $image = $row['image'];
	$video = $row['video'];
    $td = date("Y-m-d"." "."H:i:s",$row['time']);
    $post_num = strlen($post);
   
    

    $one = '
     <div id="'.$id.'_post_div" class="my-3 p-3 bg-white br10 shadow-sm">
    <div class="media text-muted pt-3" style="word-wrap: break-word!important;">
      <h3 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125  border-gray">
        <strong class="post_img">';

           $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$uname' LIMIT 0,1");
      while($ro = mysqli_fetch_array($dat)){
        $uid = $ro['id'];
        $profile_pic = $ro['profile_pic'];

        if($profile_pic != ""){
                $two =  "<a href='user-images.php?user=".$uname."'><img alt='".$uname."'s profile picture' src='all_user_profile_pic/".$profile_pic."' style='border-radius:50%;height:20px;width:20px;'></a>";
              }else{
                $two =  "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
              }
      }

      $three = '</strong>
        <strong class="text-gray-dark">
          <a href="profile/?view='.$uname.'" style="color: black;text-decoration: none;">'.$uname.'</a></strong>

        <i style="float: right;">
          <time style="font-size: 15px;" class="timeago" datetime="'.$td.'">'.$td.'</time>
        </i>
        <br>
        <div class="post_message" style="margin-top: 10px;word-wrap: break-word!important;">';


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
    <img src="post_images_1123s/'.$uid.'_post_images/'.$image.'" alt="'.$uname.'">
  </div>
';
        }
		else if($type == "video"){
          if(!empty($post)){
            $four =  "<h4>".$post."</h4>";
          }

  $four = $four . '<div class="post_video_container">
    <video controls="controls" class="post-video">
		<source src="post_videos_issmims/'.$uid.'post_videos/'.$video.'">
	</video>
  </div>
';
        }

        $five = '        </div><br><br><span class="pointer" style="font-size: 15px;" onclick="post_likes('.$id.')">
       ';
    
              $num_like = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id'");
              $total = 0;
              if(mysqli_fetch_assoc($num_like)){
                $total_likes = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id'");
                while($likes = mysqli_fetch_array($total_likes)){
                  $total = $total+1;
                  global $total;
                }
                if($total > 999){
                  $six =  "999+";
                }else{
                  $six =  $total;
                }

              }else{
                $six =  "0";
              }

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

              $nine = '</span><hr><center>
          <div class="post_actions m0">
            <div style="width: 10%;"></div>
            <span id="'.$id.'info_like">';


      

              $check_like_btn = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id' and username = '$ses_uname'");
              if(mysqli_fetch_assoc($check_like_btn)){

$ten = ' <button id="'.$id.'" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;"
            onclick="unlike('.$id.')"><i class="fa fa-thumbs-up"></i>
          </button>';
              }
                else{
         $ten = '<button id="'.$id.'" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post('.$id.','.$uid.')"><i class="fa fa-thumbs-up"></i>
            </button>';

            }
            $eleven = ' </span>
              

            <div style="width: 70%;"></div>
            <button onclick="view_comments('.$id.')" class="btn btn" style="display: flex;"><i class="fa fa-comment" style="color: black;"></i> <span class="post_num_circle">
              
            </span></button>
           </center>
        </div>
  </div>
<div class=""></div>';
              $all = $one.$two.$three.$four.$five.$six." likes".$seven.$eight." comments".$nine.$ten.$eleven;

              $gen_err = '<div></div><br>';

              if($ses_id == $uid){
                  $all_post_now[] = $all;
              }else{
                $cpiiafto = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$uid'");
                if(mysqli_fetch_assoc($cpiiafto)){
                  $all_post_now[] = $all;
                  $bundle = $bundle + 1;
                }else{
                  $all_post_now[] = $gen_err;
                }
              }
              ?>
           

<?php

  }
  echo "<span style='position:relative;top:-1000px;opacity:0;z-index:-1000;'>";
   echo 'Please this note is not important developers tool on 12 april 2021 7:46:am by Okeke Divine';
   echo "</span>";


echo "<div class='membrane'>";


  $all_post_now1 = array_unique($all_post_now);
  foreach ($all_post_now1 as $post_ready) {
    echo "<div class='all'>".$post_ready."</div>";
  }
  echo "<div>";

?>
