<?php

	if(isset($_REQUEST['id'])){
		include("index.php");
		$id = $_REQUEST['id'];
		

		$momments = mysqli_query($conn,"SELECT * FROM $post_comments WHERE post_id = '$id'");
          if(mysqli_fetch_assoc($momments)){

            $get_comm = mysqli_query($conn,"SELECT * FROM $post_comments WHERE post_id = '$id' ORDER BY id DESC");
            while($comments_found = mysqli_fetch_array($get_comm)){
              $uname = $comments_found['username'];
              $post_text = $comments_found['text'];
              $td = date("Y-m-d"." "."H:i:s",$comments_found['time']);
              ?>
              <div class="comment_box">
                <div class="post_top">
                  <?php echo $uname; ?> 
                  &nbsp;
                  <div style="float: right!important;"><time class="timeago" datetime="<?php echo $td; ?>"><?php echo $td; ?></time>
                  </div>
                </div>
                <div class="post_content">
                 <?php
                  echo $post_text;
                 ?>
                </div>
              </div>

              <?php
            }

          }else{
            echo "<div class='wd100 mb-1'>
            No comments found!
            </div>";
          }

	}

?>