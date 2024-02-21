<meta charset="utf-8">
<?php

session_start();
include("../../conn.php");
include("../../js.php");
include("../ver.php");
include("../ses.php");
include("../../css.php");

if(isset($_GET['chat_with']) && $_GET['chat_with'] != $ses_id){
	$chat_with = $_GET['chat_with'];
	
	$dfgso = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$chat_with'");
	while ($odkfosdf = mysqli_fetch_array($dfgso)) {
		$ses_rec_id = $odkfosdf['id'];
		$ses_rec_uname = $odkfosdf['username'];
		$ses_rec_pp = $odkfosdf['profile_pic'];
		$skiyen_rec_pp = $ses_rec_pp;
		$ses_rec = $ses_rec_id;
	}


	include("../headers/home_private_chat.php");
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/font/css/all.css?r=cache">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css?r=cache">
		<link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
		<link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
		<script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
	</head>
	<body id="body">
		<br><br>
		<!-- <?php

	$ucimg = mysqli_query($conn,"SELECT * FROM $user_global_settings WHERE user_id = '$ses_id' and settings = 'chat_background' and settings_value != ''");
	if(mysqli_num_rows($ucimg) == 1){
		while($row = mysqli_fetch_assoc($ucimg)){
			$img =  $row['settings_value'];
		}
		?>
		<img src="/welcome/all_chat_bg/<?php echo $img; ?>" class="chat_background" alt="">
		<?php
	}else{
		?>
		<img src="/logo/atrium.jpg" class="chat_background" alt="">
		<?php
	}

	?> -->
<style type="text/css">
	html,body{
		/*background: url('/logo/atrium.jpg')!important;*/
		/*background-repeat: no-repeat!important;*/
		/*background-size: contain!important;*/
		/*background-attachment: fixed!important;*/
		/*background-size: cover!important;*/
	}
	#all_msg{
		background: transparent!important;
	}
	#sitelon .inner-loader{
		background: #fff;
	}
	#sitelon{
		background: #007bff;
	}
</style>

	<div id="all_msg">
		

	</div>


<!-- <div class="msg_area_input">
<?php
$chec_block = mysqli_query($conn,"SELECT * FROM $block_p_chat_user WHERE owner = '$ses_id' and  who = '$ses_rec_id' || owner = '$ses_rec_id' and who = '$ses_id'");
if(mysqli_fetch_assoc($chec_block)){
	?>
	<center>This chat has been blocked by one of the participants.</center>
	<?php
}else{
	?>
<button id="myBtn" style="width: 5%;" class="btn btn sdfsdf">&#128512;</button>
<input type="text" onkeypress="senda(event)" name="msg" placeholder="Type..." id="msg" class="form-control inp">
<button class="btn btn wpp sending_button" onclick="send_messsage()"><i class="fa fa-paper-plane"></i></button>
<?php
}
?>
</div> -->

<div class="dfes" id="dfes">
	<?php
		$chec_block = mysqli_query($conn,"SELECT * FROM $block_p_chat_user WHERE owner = '$ses_id' and  who = '$ses_rec_id' || owner = '$ses_rec_id' and who = '$ses_id'");
		if(mysqli_fetch_assoc($chec_block)){
			?>
			<center><span class="text-danger">This chat has been blocked by one of the participants.</span></center>
			<?php
		}else{
	?>
	<span class="fgdfgok" onclick="close_stickers();"><i class="fa fa-times"></i></span>
	<div class="content" id="emoji_content_box"></div>
	<div class="bottom">
		<center>
			<button class="btn sdifgjdpfs" onclick="open_chat_emoji();"><img src="/logo/message-box/emoji.png?r=cache"></button>
			<button class="btn sdifgjdpfs" onclick="open_chat_gif();"><img src="/logo/message-box/gif.png?r=cache"></button>
			<button class="btn sdifgjdpfs" onclick="open_chat_sticker();"><img src="/logo/message-box/stickers.png?r=cache"></button>
		</center>
	</div>
	<?php
		}
	?>
</div>




<div class="private-msg-bottom-input-area">
	<div class="icons-box">
		<i onclick="goto('#plus');" class="fa fa-plus-circle text-white jwdofr932ujo3"></i>
		<i onclick="goto('#camera');" class="fa fa-camera text-white dojfosdfsdf"></i>
		<i onclick="goto('#microphone');" class="fa fa-microphone text-white dojfosdfsdf"></i>
		<i onclick="load_stickers();" class="fa fa-smile text-white"></i>
	</div>
	<div class="msg-box">
		<input type="text" onclick="close_stickers();" onkeypress="senda(event)" placeholder="Type message..." name="msg" id="msg">
		<button onclick="send_messsage()" type="button"><i class="fa fa-paper-plane"></i></button>
	</div>
</div>


<div id="content"></div>


	<script type="text/javascript" src="/js/jquery.js"></script>
	</body>
	</html>







<!-- <div id="mo" class="mo1" style="z-index: 100;">
  <div class="mo-content1" style="">
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

</div> -->


<?php
include("scripts.php");
}else{
	echo "<script>window.location = '../skiyen_comminicate.php'; </script>";
}
?>