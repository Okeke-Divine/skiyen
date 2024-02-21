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

  ?>
  <link rel="stylesheet" type="text/css" href="/font/css/all.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.css">
  <link rel="shortcut icon" href="/logo/s1.png">
  <title><?php echo $ses_uname; ?> | Create Post | <?php echo $site_name; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
</head>
<body>

  <div class="skiyen-post-container">


  <?php
    if(isset($_GET['iframe'])){}else{
  ?>
    <div class="skinavbar">

      <button class="sigjdfg" onclick="prev_page();"><i class="fa fa-chevron-circle-left"></i></button>

      <img src="/welcome/all_user_profile_pic/<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>">

      <span><i class="fa fa-bullhorn"></i> Post</span>

    </div>
  <?php
    }
  ?>

  <div class="skibody">
    <h4 id="me">What's on your mind?</h4>
    <textarea class="form-control" id="skiyen_post_textarea" placeholder="what's on your mind?">sdfsdf</textarea>
    <div class="sojmojojol">
      <div onclick="set_post_textarea_style('text','white','black');" datadefine="color" datavalue="black" class="jokdfodskfsd postbgwhite"></div>
      <div onclick="set_post_textarea_style('text','black','white');" datadefine="color" datavalue="black" class="jokdfodskfsd postbgblack"></div>
      <div onclick="set_post_textarea_style('text','yellow','black');" datadefine="color" datavalue="yellow" class="jokdfodskfsd postbgyellow"></div>
      <div onclick="set_post_textarea_style('text','red','white');" datadefine="color" datavalue="red" class="jokdfodskfsd postbgred"></div>
      <div onclick="set_post_textarea_style('text','pink','white');" datadefine="color" datavalue="pink" class="jokdfodskfsd postbgpink"></div>
      <div onclick="set_post_textarea_style('text','lightgreen','white');" datadefine="color" datavalue="lightgreen" class="jokdfodskfsd postbglightgreen"></div>
      <div onclick="set_post_textarea_style('text','green','white');" datadefine="color" datavalue="green" class="jokdfodskfsd postbggreen"></div>
      <div onclick="set_post_textarea_style('text','lightblue','white');" datadefine="color" datavalue="lightblue" class="jokdfodskfsd postbglightblue"></div>
      <div onclick="set_post_textarea_style('text','blue','white');" datadefine="color" datavalue="blue" class="jokdfodskfsd postbgblue"></div>
      <div onclick="set_post_textarea_style('text','orange','white');" datadefine="color" datavalue="orange" class="jokdfodskfsd postbgorange"></div>
      <div onclick="set_post_textarea_style('text','brown','white');" datadefine="color" datavalue="brown" class="jokdfodskfsd postbgbrown"></div>
      <div onclick="set_post_textarea_style('text','purple','white');" datadefine="color" datavalue="purple" class="jokdfodskfsd postbgpurple"></div>
    </div>

    <button class="btn btn-primary right mt-2 mb-2">Post</button>
  </div>


  </div>

</body>
</html>
