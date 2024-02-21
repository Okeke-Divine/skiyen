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
  <title><?php echo $ses_uname; ?> | Apps | <?php echo $site_name; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
  <script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
</head>


<body>
<main class="container" role="main">

<br>
	
  <div class="flexex">
    
    <button class="btn btn game_btn" onclick="window.location = 'todo-list';">
      <img src="../../logo/main/todo.png" style="width: 150px;height: 150px;">
      <br>
    My to do list
  </button>
   <button class="btn btn game_btn" onclick="window.location = 'calculator';">
      <img src="../../logo/main/cal.png" style="width: 150px;height: 150px;">
      <br>
    Calculator
  </button>

  </div>

</main>
</body>