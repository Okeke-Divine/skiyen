<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
  <?php 

  @$plac_hdr = $_GET['search'];
  session_start();
  include("../../conn.php");
  include("../../css.php");
  include("../ses.php");
  include("../ver.php");
  include("../headers/header.php");

  ?>
  <meta name="robots" content="index,follow">
  <title><?php echo $ses_uname; ?> | Forum | Skiyen</title>
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
        <i class="fa fa-comment"></i>
        </span>

        Forum

        <button class="btn btn fa fa-home tooltip_ski" data-tooltip="Forum Home" onclick="goto('../forum');"></button>

        <span class="right" style="position: relative;top:-7px;">
          <input type="text" style="position: relative;top:2px;" name="s" id="s" value="<?php echo $plac_hdr; ?>" placeholder="Search..." class="new_input" style="width: 200px;">
          <button class="btn btn-primary" onclick="s()"><i class="fa fa-search"></i></button>
        </span>

    </div>
      <div id="content">
        <?php

          if(isset($_GET['question'])){
            $hhid = $_GET['question'];
            include("question.php");
          }else if(isset($_GET['search'])){
            $search = $_GET['search'];
            include("search.php");
          }
          else{
            include("main.php");
          }

        ?>
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


  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery.timeago.js"></script>

</html>    
<script type="text/javascript">
      function s(){
        var s = document.getElementById('s').value;
        if(s == ""){

        }else{
          window.location  = "search-for-"+s;
        }
      }
  function c(){
    var word_count,ask,alen;
    var ask = _('ask').value;
    alen = ask.length;
    word_count = _('word_count');
    word_count.innerHTML = alen;  
  }
  
</script>