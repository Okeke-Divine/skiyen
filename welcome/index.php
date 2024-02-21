<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
 
  <?php 

  session_start();
  include("../css.php");
  include("../conn.php");
  include("ses.php");
  include("ver.php");
  include("ip-info.php");
  include("headers/header.php");
  $ip = UserInfo::get_ip();	
	$dev = UserInfo::get_device();
	$os = UserInfo::get_os();
	$bro = UserInfo::get_browser();

  ?>
  <link rel="stylesheet" type="text/css" href="/font/css/all.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="shortcut icon" href="/logo/s1.png">
  <meta name="keywords" content="skiyen,social networking">
  <meta name="robots" content="index,follow">
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script src="/js1/jquery-latest.js" type="text/javascript"></script>
  <script src="/js1/push.js?r=cache" type="text/javascript"></script>
  <title><?php echo $ses_uname; ?> | Home | <?php echo $site_name; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
  <script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
</head>
<body>
  <div class="my_def_body page_body">
  <main class="container" role="main">
	<br>
<?php

	$ic = mysqli_query($conn,"SELECT * FROM $user_sec WHERE user_id = '$ses_id'");
	if(mysqli_fetch_assoc($ic)){
	
		$sl = mysqli_query($conn,"UPDATE $user_sec SET ip_addr = '$ip' WHERE user_id = '$ses_id'");		
		$sl1 = mysqli_query($conn,"UPDATE $user_sec SET os = '$os' WHERE user_id = '$ses_id'");
		$sl2 = mysqli_query($conn,"UPDATE $user_sec SET device = '$dev' WHERE user_id = '$ses_id'");		
		$sl3 = mysqli_query($conn,"UPDATE $user_sec SET browser = '$bro' WHERE user_id = '$ses_id'");		

	}else{
		
	$ii = mysqli_query($conn,"INSERT INTO $user_sec (
`id` ,
`user_id` ,
`ip_addr` ,
`os` ,
`device` ,
`browser`
)
VALUES (
NULL , '$ses_id', '$ip', '$os', '$dev', '$bro'
);");


	}

?>
  <script type="text/javascript" src="../js/jquery.timeago.js"></script>
<?php 

if(isset($_GET['logged_in'])){
	?>

	<div class="alert badge-info">
		<?php echo $ses_uname; ?> you are already logged in.
		<span class="right pointer" onclick="window.location = '?';">x</span>
	</div>
	<?php
}

include("desk_noti.php");
include("users_pro.php");
?>

<div id="reciever"></div>


<div class="home_cont">
  <div class="sug_menu sug_menu1" id="sug_menu1"> 
  	<?php
  	 include("sidebar.php");
  	?>
  </div>
  <div class="sug_menu" id="sug_menu">
    
  </div>

  <div class="post_menu mt-3">
	 	
    <main class="container" role="main">
      <!-- <button class="btn btn btn-info" id="get_data" onclick="get_data();"><i class="fa fa-users"></i></button> -->
     <!-- <button class="btn btn" id="world_post" onclick="world_post()"><i class="fa fa-globe"></i></button> -->
  

     <div class="wd100 white br-5 text-dark p-3 wo_box_shadow">
      <span class="s9j3tmkef text-light">
        <i class="fa fa-home"></i>
        </span>

        News Feed
    </div>
    <br>



      <div class="bg-white shadow-sm p-1 mt-2">

        <img src="all_user_profile_pic/<?php echo $ses_user_pp; ?>?r=<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>" class="my_nav_img p-1">
     
        <span class="infodso" onclick="open_skiyen_post_page('');">What's on your mind?</span>

     <span class="right home_post_icons">
        <img onclick="open_skiyen_post_page('&entry=image');" class="pointer" src="/logo/api3/svg/camera.svg">
        <img onclick="open_skiyen_post_page('&entry=sticker');" class="pointer ml-1" src="/logo/api3/svg/sticker.svg">
      </span>

     </div>



		  <div id="content"></div>
    </main>

  </div>

  <div class="dsfgkdsa030fo">
    <?php include("right.php"); ?>
  </div>

</div>



<div class="upper_btn" id="upper_btn" onclick="window.location = '#';">
  <i class="fa fa-caret-up"></i>
</div>

</main>
</div>
</body>
</html>

  <?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>

<script type="text/javascript">
	$(document).ready(function (){
    get_data();
	});
</script>


<script type="text/javascript">

      var ses_id = "<?php echo $ses_id; ?>";
  
  const post_liked = new Audio();
  post_liked.src = '/assets/audios/post_liked.m4a?r=cache';

  const post_unliked = new Audio();
  post_unliked.src = '/assets/audios/post_unliked.m4a?r=cache';

  function like_post(id,uid){
      var formdata = new FormData();
      formdata.append("id", id);
      var foor = uid;
      var ajax = new XMLHttpRequest();
      formdata.append("foor", foor);
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","like.php");
      ajax.send(formdata);
      document.getElementById(id).style.display = "none";
      var unlikeagain = '<button id="'+id+'" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;" onclick="unlike(id)"><i class="fa fa-thumbs-up"></i></button>';
      document.getElementById(id+"info_like").innerHTML = unlikeagain;

      post_liked.play();
  }

   function unlike(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","unlike.php");
      ajax.send(formdata);
      document.getElementById(id).style.display = "none";
      var likeagain = '<button id="'+id+'" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post(id,ses_id)"><i class="fa fa-thumbs-up"></i></button>';
      document.getElementById(id+"info_like").innerHTML = likeagain;
      post_unliked.play();
  }
  function _(el){
    return document.getElementById(el);
  }
  function post_likes(id){
    window.location = 'post-likes.php?post='+id;
  }
  function view_comments(id){
    window.location = 'view_comments/'+id;
  }
  var wpage = 1;
  var mpage = 1;

  function get_data(){
    my_ajax('postify.php?dit=followers&&page='+mpage,'content','jquerytime');
  }
</script>