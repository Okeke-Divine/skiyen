<!-- open posts -->
<?php

  $for_id = get_user_id($for,'id');
 $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE user_id = '$for_id' ORDER BY id DESC");

  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $uname = get_user_main($for_id,'username');
    $post = $row['post'];
    $td = date("Y-m-d"." "."H:i:s",$row['time']);
    // neat date
    $td_ex = date("d M Y"." "."H:i",$row['time']);
    $type = $row['type'];
    $post_privacy = $row['privacy'];
    $video = $row['video'];
    $image = $row['image'];
    $post_num = strlen($post);
?>
    <!-- post container open -->
    <div id="<?php echo $id; ?>_post_div" class="my-3 p-3 bg-white br10 shadow-sm">

        <!-- user profile picture -->
        <?php echo "<a href='../user-images.php?user=$my_uname'><img alt='$my_uname' src='../all_user_profile_pic/$my_profile_pic' class='my_nav_img'></a>";
        ?>
        <!-- close users profile picture -->
        <strong class="text-gray-dark">
          <!-- user name -->
          <a href="?view=<?php echo $uname; ?>" class="skiyen_black_links"><?php echo $uname; ?></a></strong>
          <!-- post privacy -->
           · <?php echo post_privacy($post_privacy); ?>
          <!-- time post was created -->
          <i class="right"><time class="timeago" datetime="<?php echo $td; ?>" title="<?php echo $td_ex; ?>"><?php echo $td; ?></time></i>
          <br>

          <!-- post content main -->
            <div class="post_message" style="margin-top: 10px;">
              <?php

              // if post is a text
        if($type == "text"){
          if($post_num >= 200){
              ?>
              <textarea readonly="" style="width: 100%;outline: 0;border: 0;resize: none;"><?php echo substr($post,0,200);?></textarea>
              <?php
              echo "&nbsp;&nbsp;";
              echo "<a class='readmore' href='../layout.php?ssid=27380952783945720983457428039752097528094326093526384095293485728340957290348752908375093245&&sid=2352345&id=$id&&pos=$id&&continue=12994321841293470123740192834710298'>Readmore...</a></span>";
          }else{
            echo $post;
          }
        }
        // if post is an image

          else if($type == "image"){
            if(!empty($post)){
              echo "<h4>".$post."</h4>";
            }
           ?>
           <!-- loading the image -->
        <div class="post_image_container">
          <img src="../post_images_1123s/<?php echo $uid; ?>_post_images/<?php echo $image; ?>" alt="<?php echo $uname; ?>'s post image">
        </div>
    <?php
      }
      // if post is a video
          else if($type == "video"){
          if(!empty($post)){
            echo "<h4>".$post."</h4>";
          }
          ?>
          <div class="post_video_container">
            <video controls="controls" class="post-video">
              <source src="../post_videos_issmims/<?php echo $my_id; ?>post_videos/<?php echo $video; ?>">
           </video>           
        </div>
      <?php } ?>
      <br>

      <!-- post reaction count open -->
    <hr>      
      <div class="navabar">
        <!-- like post o -->
       <span style="font-size: 15px;" onclick="move_window('../post-likes.php?post=<?php echo $id; ?>')">
          <?php

              $num_like = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id'");
              $total = 0;
              if(mysqli_fetch_assoc($num_like)){
                $total_likes = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id'");
                while($likes = mysqli_fetch_array($total_likes)){
                  $total = $total+1;
                  global $total;
                }
                if($total > 999){
                  echo "999+";
                }else{
                  echo $total;
                }

              }else{
                echo "0";
              }
            ?> 
            Likes
       </span>
       <!-- like post c -->
       <!-- comment on post o-->
    <span class="right" style="font-size: 15px;">
      <?php
                   $num_comment = mysqli_query($conn,"SELECT * FROM $post_comments WHERE post_id = '$id'");
                  $total_com = 0;
                  if(mysqli_fetch_assoc($num_comment)){
                     $num_comment1 = mysqli_query($conn,"SELECT * FROM $post_comments WHERE post_id = '$id'");
                     while($comment = mysqli_fetch_array($num_comment1)){
                        $total_com = $total_com+1;
                        global $total_com;
                     }
                      if($total_com > 100000){
                        echo "1M+";
                      }else{
                        echo $total_com;
                      }
                  }else{
                    echo "0";
                  }
                  ?> comments
    </span>
       <!-- comment on post c -->
     </div>
      <!-- post reaction count close -->

      <!-- post reaction main o -->
      <hr>
          <div class="navbar m0">
            <!-- reaction span o -->
            <span id="<?php echo $id; ?>info_like">
            <?php
              $check_like_btn = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id' and username = '$ses_uname'");
              if(mysqli_fetch_assoc($check_like_btn)){
                ?>

                <button id="<?php echo $id; ?>" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;"
            onclick="unlike('<?php echo $id; ?>')"><i class="fa fa-thumbs-up"></i></button>

                <?php
              }
                else{
              ?>
            <button id="<?php echo $id; ?>" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post('<?php echo $id; ?>','<?php echo $uid; ?>')"><i class="fa fa-thumbs-up"></i></button>
            <?php
            }
              ?>
            </span>
            <!-- reaction span closed -->
              <!-- when post like is click or uclicked -->
            <span id="<?php echo $id; ?>info_like" class="btn btn-light" style="display: none;"></span>
            <!-- end click -->

              <!-- comment o -->
             <button onclick="window.location = '../view_comments/<?php echo $id; ?>';" class="btn btn" style="display: flex;"><i class="fa fa-comment" style="color: black;"></i></button>
             <!-- comment c -->

             <!-- if post has only text share to facebook -->
             <?php

             if($type == "text"){
              ?>
              <a class="btn btn text-dark tooltip_ski" data-tooltip="Share to facebook" href="http://www.facebook.com/sharer.php?u=http://web-skiyen.rf.gd/&quote=<?php echo $post; ?>&redirect_url=http://web-skiyen.rf.gd/legal/sharer_type.php?u=facebook" target="_blank"><i class="fa fa-share"></i></a>
              <?php
             }

             ?>

          </div>
      <!-- post reaction main c -->

            </div>
          <!-- post content main close -->

    <!-- post container close -->
    </div>



<!-- close post -->
<?php

  }

?>