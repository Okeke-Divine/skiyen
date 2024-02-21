<?php

date_default_timezone_set('Africa/Lagos');
date_default_timezone_get();

?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<?php
session_start();
include("../../css.php");
include("../../conn.php");
include("../ses.php");
include("../ver.php");
include("../headers/my_profile.php");
$uid = $ses_id;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="keywords" content="skiyen,social networking,my profile">
  <meta name="robots" content="index,follow">
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
	<title>My Profile . <?php echo $ses_uname; ?></title>
</head>
<body>
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/jquery.timeago.js"></script>

<script type="text/javascript">
	function post(){
		window.location = "../post.php";
	}
</script>

<div>
		<?php

		include("../../conn.php");

			$my_profile = $ses_uname;
			$query = "SELECT * FROM $user_table WHERE username = '$ses_uname' LIMIT 0,1";
			echo "<span class='pae'>";
			$data = mysqli_query($conn,$query);

			if($data){

				while($row = mysqli_fetch_array($data)){
					echo "</span>";
					$my_id = $row['id'];
          $my_email = $row['email']; 
					$my_uname = $row['username']; 
					$my_gender = $row['gender']; 
					$my_profile_pic = $row['profile_pic'];
					$my_views = $row['views'];
					$my_cover_photo = $row['cover_photo'];
					
					?>
					<center>
					<div id="profile_picture_box" class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97%;">
            <div class="media text-muted pt-3">
    	
      <h4 style="font-size: 20px;margin-top: 15px;word-wrap: break-word;" class="media-body pb-3 mb-0 small lh-125 border-gray">
			<div class="cpc">
                <img src="../../logo/sound.jpg" class="msmsomso">
            </div>
  <?php
              if($my_profile_pic != ""){
                ?>

                <a href='../user-images.php?user=<?php echo $ses_uname; ?>'><img alt='<?php echo $my_uname; ?>' src='../all_user_profile_pic/<?php echo $my_profile_pic; ?>' class="siddsoj"></a>


                <?php
              }else{
                echo "<i class='fa fa-user-circle glenei' style='color: inherit;font-size: 150px;'></i>";
              }
           ?>
                         <span onclick="move_window('../profile_picture/')" class="profile_picture_edit_logo"><i class="fa fa-camera def_edit"></i></span>

<span class="profile_text"><?php echo $my_uname; ?><br></span>
<span class="profile_text" style="word-wrap: break-word;"><a href="https://mailto:<?php echo $my_email; ?>" class="pos_link" target="_blank"><?php echo $my_email; ?></a><br></span>
            <style type="text/css">
              .pos_link:hover{
                color: black;
              }
            </style>
						<span class="profile_text"><?php echo $my_gender; ?><br></span>

<?php

//include the followers and following stuffs. 
include("fol_if.php");

?>
<br>
<br>
<button class="btn btn-light" onclick="window.location = '../post/';">Post</button>

					</center>

    </div>


    <?php
include("../warnings.php");
?> 

<!--  <div class="plus_one" onclick="move_window('add.php');">
              <i class="fa fa-plus plus_fa" style="font-size: 30px;"></i>
      </div> -->

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
	<!-- post action -->
		
	</div>
	</div>
	</div>
</center>
	
	<br>
	
<br>
<script type="text/javascript">
  jQuery(document).ready(function(){
    $("time.timeago").timeago();
  });
</script>

 <?php



  $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE username = '$ses_uname' ORDER BY id DESC");

  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $uname = $row['username'];
    $post = $row['post'];
    $td = date("Y-m-d"." "."H:i:s",$row['time']);
    $type = $row['type'];
    $image = $row['image'];
    $post_num = strlen($post);
?>
<!-- find all posts -->
  <center>
    <div id="<?php
     echo $id; ?>_post_div" class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97.5%;text-align: left;">
    <div class="media text-muted pt-3">
      <h3 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125   border-gray">
        <strong class="post_img">
          <?php
           $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$uname' LIMIT 0,1");
      while($ro = mysqli_fetch_array($dat)){
        $profile_pic = $ro['profile_pic'];

        if($profile_pic != ""){
                echo "<a href='../all_user_profile_pic/$profile_pic?user=$uname'><img alt='could not be loaded' src='../all_user_profile_pic/$profile_pic' style='border-radius:50%;height:20px;width:20px;'></a>";
              }else{
                echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
              }
      }

        ?>
        </strong>
        <strong class="text-gray-dark">
          <a href="../profile/?view=<?php echo $uname; ?>" style="color: black;text-decoration: none;"><?php echo $uname; ?></a></strong>
        <strong style="float: right;"><time class="timeago" datetime="<?php echo $td; ?>"><?php echo $td; ?></time></strong>
        <br>
        <div class="post_message" style="margin-top: 10px;">
             <?php 
             if($type == "text"){
            if($post_num >= 25){
               ?>
              <textarea readonly="" style="width: 100%;outline: 0;border: 0;resize: none;"><?php echo substr($post,0,150);?></textarea>
              <?php
              echo "&nbsp;&nbsp;";
              echo "<a class='readmore' href='../layout.php?ssid=27380952783945720983457428039752097528094326093526384095293485728340957290348752908375093245&&sid=2352345&id=$id&&pos=$id&&continue=12994321841293470123740192834710298'>Readmore...</a></span>";
          }else{
            echo $post;
          }
          ?>
<br>
          <?php
          }else if($type == "image"){
          if(!empty($post)){
            echo "<h4>".$post."</h4>";
          }
           ?>

  <div class="post_image_container">
    <img src="../post_images_1123s/<?php echo $uid; ?>_post_images/<?php echo $image; ?>" alt="<?php echo $uname; ?>'s post image">
    <br>
  </div>

<?php
}
?>
         <br>
  <span class="" style="font-size: 15px;" onclick="move_window('post-likes.php?post=<?php echo $id; ?>')">
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
            <hr>
            
 <center>
          <div class="post_actions m0">
            <div style="width: 10%;"></div>
              <?php
              $check_like_btn = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id' and username = '$ses_uname'");
              if(mysqli_fetch_assoc($check_like_btn)){
                ?>

                <button id="<?php echo $id; ?>like_button" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;"
            onclick="unlike('<?php echo $id; ?>')"><i class="fa fa-thumbs-up"></i>
            <span class="post_num_circle">

            </span> 
          </button>

                <?php
              }
                else{
              ?>
            <button id="<?php echo $id; ?>like_button" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post('<?php echo $id; ?>','<?php echo $uid; ?>')"><i class="fa fa-thumbs-up"></i> <span class="post_num_circle">
            <?php
            }
              ?>
            </span></button>
            <span id="<?php echo $id; ?>info_like" class="btn btn-light" style="display: none;"></span>
            <div style="width: 70%;"></div>
            <button onclick="window.location = 'view_comments?date=<?php echo $id; ?>';" class="btn btn" style="display: flex;"><i class="fa fa-comment" style="color: black;"></i> <span class="post_num_circle">
              
            </span></button>
           </center>


            <div style="width: 10%;"></div>
        </div>
        
        <span id="<?php echo $id; ?>_comment_info" style="display: none;width: 50%;text-align: left;" class="btn btn-light"></span>
 
 <form style="float: right;" action="sdlkjgsdklhiasudhiu87yh9onfmsuafynx8qweixm8woqirxmj9opeaxkfdixfsdnhdfioxjads9pfx8unasd98fxoiasdjjofxidsnifoshdnfxoiadshfnxoiasdhfxoiweuxnasoijxaspodf.php" method="POST">
          <input type="hidden" name="content" value="<?php echo $post; ?>">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <button class="btn btn-secondary" name="edit"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger" name="delete"><i class="fa fa-trash-alt"></i></button>
        </form>
        </div>
  </div>
  </center>
<?php

  }

?>

<script type="text/javascript">
  function like_post(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../like.php");
      ajax.send(formdata);
      document.getElementById(id+"like_button").style.display = "none";
      document.getElementById(id+"info_like").innerHTML = "Liked";
      document.getElementById(id+"info_like").style.display = "block";
  }
   function unlike(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../unlike.php");
      ajax.send(formdata);
      document.getElementById(id+"like_button").style.display = "none";
      document.getElementById(id+"info_like").innerHTML = "Unliked";
      document.getElementById(id+"info_like").style.display = "block";
  }
  function _(el){
    return document.getElementById(el);
  }
  function comment(post_id){
    var comment = _(post_id+"_comment_text").value;
      var comment_info = _(post_id+"_comment_info");
    if(comment.length > 0){
      var formdata = new FormData();
      formdata.append("comment", comment);
      formdata.append("id", post_id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","../comment.php");
      ajax.send(formdata);
      ajax.addEventListener("load",completeHandler,false);
    }else{
      var comment_info = _(post_id+"_comment_info");
      comment_info.style.display = "block";
      comment_info.innerHTML = "Empty";
      comment_info.style.transition = "2s";
    }
    function completeHandler(event){
        var comment_info = _(post_id+"_comment_info");
      comment_info.style.display = "block";
      comment_info.innerHTML = event.target.responseText;
    var comment = _(post_id+"_comment_text").value = "";
      comment_info.style.transition = "2s";
    }
  }

</script>



	
</body>
</html>
<?php

if($_SESSION['mode'] == "dark"){
?>
<style type="text/css">.fa-user-circle{color: white!important!important;}</style>
<?php
}

?>
	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>

