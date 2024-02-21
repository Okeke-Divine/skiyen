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
  <title><?php echo $ses_uname; ?> | Find People | <?php echo $site_name; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
  <script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
</head>

<div class="my_def_body page_body">
<body>
	<br>
  <main class="container" role="main">
<div class="home_cont">
  <div class="sug_menu sug_menu1" id="sug_menu1"> 
    <?php
     include("../sidebar.php");
    ?>
  </div>
  <div class="sug_menu" id="sug_menu">
    
  </div>

  <div class="post_menu mt-3">
     
    <main class="container" role="main">
      <div class="wd100 white br-5 text-dark p-3 wo_box_shadow">
        <span class="s9j3tmkef text-light">
          <i class="fa fa-user-friends"></i>
          </span>

        Find People
      </div>
     <?php include("1.php"); ?>
   </main>

  </div>
  <div class="dsfgkdsa030fo">
    <?php include("../right.php"); ?>
  </div>
</div>


	<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>
</main>
</body>
</div>  
</html>
<script type="text/javascript">
	function follow(id){
      var cont = _(id+"main");
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../profile/follow.php");
      ajax.send(formdata);
      cont.innerHTML = '<button onclick="unfollow('+id+')" class="btn btn-primary">Following</button>';
  }
   function unfollow(id){
      var cont = _(id+"main");
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","../profile/unfollow.php");
      ajax.send(formdata);
      cont.innerHTML = '<button onclick="follow('+id+')" class="btn btn-light"> Follow</button>';
  }
</script>