 <script type="text/javascript" src="../js/jquery.timeago.js"></script>
 <?php

    session_start();
    include("../conn.php");
    include("../function.php");
    include("ses.php");


      $visible = 0;

      @$dit = $_GET['dit'];
      $lim = 5;


      if(!isset($_GET['page'])){
        $page = 1;
      }else{
        $page = $_GET['page'];
      }
      $my_page = $page;
      $pre_page = $my_page-1;
      $next_page = $my_page+1;

      if($dit == "followers"){
        // query for total post
        $data_num_row = mysqli_query($conn, "SELECT * FROM $user_post WHERE privacy = 'followers' || privacy = 'public'");
      }else if($dit == "world"){
        // query for total post
        $data_num_row = mysqli_query($conn, "SELECT * FROM $user_post WHERE privacy = 'public'");
      }


       $this_page_first_result = ($page-1)*$lim;
      // number of posts
      $post_num_rows = mysqli_num_rows($data_num_row);
       $pnr = 0;
      $number_f_pages = ceil($post_num_rows/$lim);


// reserve this code
// while($row = mysqli_fetch_array($data_num_row)){
//     $id = $row['id'];
//     $uname = $row['username'];

//     $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$uname' LIMIT 0,1");
//       while($ro = mysqli_fetch_array($dat)){
//         $uid = $ro['id'];
//             if($ses_id != $uid){
//                $cpiiafto = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$uid'");
//                     if(mysqli_fetch_assoc($cpiiafto)){
//                      $pnr = $pnr + 1;
//                     }
//             }else{$pnr = $pnr + 1;}

//     }
//   }




      if($dit == "followers"){
        //normal query
        $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE privacy = 'followers' || privacy = 'public' ORDER BY id DESC LIMIT $this_page_first_result,$lim");
      }else if($dit == "world"){
        //normal query
        $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE privacy = 'followers' || privacy = 'public' ORDER BY id DESC LIMIT $lim");
      }
  

      ?>

      <?php

  $all_post_now = array();
$bundle = 0;
  while($row = mysqli_fetch_array($data)){
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

                $two =  "<a href='user-images.php?user=".$uname."'><img alt='".$uname."'s profile picture' src='all_user_profile_pic/".$profile_pic."' class='my_nav_img'></a>";
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
    <img src="post_images_1123s/'.$uid.'_post_images/'.$image.'?r=new" alt="'.$uname.'">
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
		<source src="post_videos_issmims/'.$uid.'post_videos/'.$video.'">
	</video>
  </div><br><hr>
';
        }

        $five = '
        <div class="navabar">
        <span class="pointer" style="font-size: 15px;" onclick="post_likes('.$id.')">
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

              $gen_err = '<div></div><br>';


              @$dit = $_GET['dit'];
              if($dit == "followers"){
                  if($ses_id == $uid){
                      $all_post_now[] = $all;
                  }else{
                    $cpiiafto = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$uid'");
                    if(mysqli_fetch_assoc($cpiiafto)){
                      $all_post_now[] = $all;
                      $bundle = $bundle + 1;
                    // }else{
                    //   $all_post_now[] = $gen_err;
                    }
                  }
              }else{
                  $all_post_now[] = $all;
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
    $visible = $visible+1;
    echo "<div class='all'>".$post_ready."</div>";
  }
  echo "<div>";

  // if the poston screen is more than 0
if($visible > 0){
         if($my_page != 1){
            echo '<button class="btn btn" onclick="mpage='.$pre_page.',get_data()"><i class="fa fa-angle-double-left"></i></button> ';
          }

          $page_buttons = 0;
    for($page=1;$page<=$number_f_pages;$page++){
          $page_buttons = $page_buttons+1;


     if($page == $my_page){
            $class = "btn btn-primary";
          }else{
            $class = "btn btn";
          }

          if($dit == "followers"){
            echo '<button class="'.$class.'" onclick="mpage='.$page.',get_data()">' . $page . '</button> ';
          }else{
            echo '<button class="'.$class.'" href="javascript:void(0)" onclick="mpage='.$page.',world_post()">' . $page . '</button> ';
          }
        }
        if($my_page != $page_buttons){
          echo '<button class="btn btn" onclick="mpage='.$next_page.',get_data()"><i class="fa fa-angle-double-right"></i></button> ';
        }
}else{
  // if my account is new and post on screen is less than 1
   ?>
    <div class="white br-5 p-2 text-dark wo_box_shadow">
        <br>

        <center>
          <div class="a0ka0dk empty_bg">
            <img src="/logo/api3/market.png" alt="no post found(skiyen)">
          </div>
          Oops! Looks like your home page is empty.<br>
          Start following people to see posts.
        </center>

        <br>
        <br>

    </div>
  <?php
}  
       

?>


