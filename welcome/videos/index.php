<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <?php 
  session_start();
  include("../../conn.php");
  include("../../css.php");
  include("../../js.php");
  include("../ses.php");
  include("../ver.php");
  include("../headers/header.php");
  ?>
  <title><?php echo $ses_uname; ?> | Videos | <?php echo $site_name; ?></title>
</head>

  <div class="my_def_body page_body">
<body>
    <main class="container" role="main">
  <br>
  <div class="home_cont">
    <div class="sug_menu" id="sug_menu">
     
     <?php
     include("../sidebar.php");
     ?>
    </div>

    <div class="post_menu mt-3">
      <main class="container" role="main">
        <div class="wd100 white br-5 text-dark p-3 wo_box_shadow">
      <span class="s9j3tmkef text-light">
        <i class="fa fa-play"></i>
        </span>

        Videos
    </div>
      <div id="content">
        <?php include("videos_main.php"); ?>
      </div>
    </main>
    
    </div>
    <div class="dsfgkdsa030fo">
      <?php include("../right.php"); ?>
    </div>
  </div>

</main>
</body>
</div>


</html>