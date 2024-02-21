		<br>

		<div id="sdfdsfo">
      
    </div>
		
     <div id="sdfkgsdfg" class="card mb-4 shadow-sm">
    
      <div class="card-header">
        <h4 class="my-0 font-weight-normal" style="text-align:left;color: black;">
            <i class="fa fa-bullhorn"></i> <b>Post</b>
          </h4>
      </div>
      <div class="card-body m-0 p-0">
        <textarea class="m-0 no-resize no-border post_textarea" placeholder="What's on your mind?" id="post_text_entry"></textarea>
        <div id="ajax_file_response" class="wd100"></div>
        <div id="ajax_upload_file_response" class="hidden p-2">
              <span id="loaded_n_total"></span><br>
              <span id="status"></span><br>
              <progress value="0" id="progressBar" max="100" style="width: 100%;"></progress>
        </div>
        <div id="ajax_response" class="wd100"></div>
      </div>
      <div class="card-footer defrt">
        
         <button class="btn btn" id="post_smile"><i class="fa fa-smile"></i></button>
         <button class="btn btn btn-info" id="post_text"><i class="fa fa-align-center"></i></button>
         <button class="btn btn" id="post_camera"><i class="fa fa-photo"></i></button>
         <button class="btn btn" id="post_video"><i class="fa fa-play-circle"></i></button>
         <button class="btn btn btn-info" id="post_globe"><i class="fa fa-globe"></i></button>
         <button class="btn btn" id="post_users"><i class="fa fa-users"></i></button>
         <button class="btn btn" id="post_me"><i class="fa fa-users-slash"></i></button>
       
        <button class="btn btn-primary" id="create_post">Post</button>

      </div>
    </div>

    <input type="file" class="hidden_must" id="file1" onchange="get_media_ready();" name="file1">
    <input type="" class="hidden_must" id="post_type" value="text" name="">
    <input type="" class="hidden_must" id="privacy" value="public" name="">



<div id="emoji_modal" class="emoji_modal" style="z-index: 11;">
    <span class="cls">&times;</span>
      <?php

  $fetch_item = "SELECT * FROM $emoji";
  $fetched = mysqli_query($conn,$fetch_item);

  while($row = mysqli_fetch_array($fetched)){
    $emoji = $row['code'];
    ?>
    <span onclick="emoji('&#<?php echo $emoji; ?>;')" class="emoji">&#<?php echo $emoji; ?>;</span>
    <?php
  }

  ?>
</div>
		
    