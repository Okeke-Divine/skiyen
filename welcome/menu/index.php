<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
 
  <?php 

  session_start();
  include("../../css.php");
  include("../../conn.php");
  include("../ses.php");
  include("../ver.php");
  include("../ip-info.php");
  include("../headers/header.php");
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
  <title><?php echo $ses_uname; ?> | Settings | <?php echo $site_name; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
  <script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
</head>

<body>

  <main class="container" role="main">
  <br>
  
  <?php

  include("modal.php");

  ?>

  <span class="small-navbar-next-br"><br></span>
  <button class="btn point access_btn"><i class="fa fa-spin fa-cog"></i> Settings</button><br>

  <hr>

  <div class="menu_btn pointer wd100 mb-5" onclick="goto('e~edit-profile')">
    <div class="icon">
        <img src="/welcome/all_user_profile_pic/<?php echo $ses_user_pp; ?>?r=cache" alt="<?php echo $ses_uname; ?>" class="my_nav_img">
    </div>
    <div class="text1">
      <div class="title"><?php echo $ses_uname; ?></div>
      <div class="content">Edit Profile Details</div>
    </div>
  </div>

  <hr>

  <div class="menu_btn pointer wd100" onclick="goto('e~chat')">
    <div class="icon">
      <i class="fa fa-comment"></i>
    </div>
    <div class="text">
      <div class="title">Chats</div>
      <div class="content">Wallpapers, Wallpappers, Chat History</div>
    </div>
  </div>

  <div class="menu_btn pointer wd100" onclick="goto('e~acount')">
    <div class="icon">
      <i class="fa fa-user-cog"></i>
    </div>
    <div class="text">
      <div class="title">Account</div>
      <div class="content">Security, Change Number, Edit Profile</div>
    </div>
  </div>

  <div class="menu_btn pointer wd100" onclick="goto('e~help')">
    <div class="icon">
      <i class="fa fa-question-circle"></i>
    </div>
    <div class="text">
      <div class="title">Help</div>
      <div class="content">Forum, Contact Us, Report a problemn</div>
    </div>
  </div>

  <div class="menu_btn pointer wd100" onclick="goto('e~other')">
    <div class="icon">
      <i class="fa fa-gamepad"></i>
    </div>
    <div class="text">
      <div class="title">Other</div>
      <div class="content">News Feed, Game</div>
    </div>
  </div>

  <div class="menu_btn pointer wd100" onclick="goto('e~storage')">
    <div class="icon">
      <i class="fa fa-signal"></i>
    </div>
    <div class="text">
      <div class="title">Storage and data</div>
      <div class="content">Video auto play, network usage</div>
    </div>
  </div>


<div class="menu_btn pointer wd100" onclick="goto('e~notifications')">
    <div class="icon">
      <i class="fa fa-bell"></i>
    </div>
    <div class="text">
      <div class="title">Notification</div>
      <div class="content">Message, Groups, Call tones</div>
    </div>
  </div>
    <hr>

  <div class="menu_btn pointer wd100" onclick="modal.style.display = 'block';">
    <div class="icon">
      <i class="fa fa-sign-out-alt"></i>
    </div>
    <div class="text">
      <div class="single">
        Logout
      </div>
    </div>
  </div>

  <br>
  <br>

</main>
</body> 
</html>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var close1 = document.getElementById("cancel");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
  modal.style.display = "none";
}
close1.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
function logout(){
  goto('/logout');
}
</script>

	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>
