       <div class="follow">
<span id="<?php echo $my_id; ?>main">
  <?php
  $chat = 0;
    if(my_profile($my_id,$ses_id) == 0){
      $chk_follow = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' and following = '$my_id'");

          if(mysqli_fetch_assoc($chk_follow) > 0){
            $chat = 1;
  ?>
            <button style="margin-top: 10px;" onclick="unfollow('<?php echo $my_id; ?>')" id="unfollow_btn" class="btn btn-primary">Following</button>
            
        
  <?php
            }else{
              ?>
              <button style="margin-top: 10px;" onclick="follow('<?php echo $my_id; ?>')" id="follow_btn" class="btn btn-light"><i class="fa fa-plus dark"></i> Follow</button>

              <?php
            }
          }
          if($chat == 1){
            ?>

              <button style="margin-top: 10px;" onclick="window.location = '../skiyen_zqq/add.php?rec=<?php echo $my_id; ?>'" id="unfollow_btn" class="btn btn"><i class="fa fa-comment"></i></button>

              <?php
          }
  ?>
</span>
  </div>