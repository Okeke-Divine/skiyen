<?php
session_start();
include("../ver.php");
include("../../conn.php");
include("../ses.php");
include("../../css.php");
include("../headers/post.php");
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Post . <?php echo $ses_uname; ?></title>
</head>
<body>
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery1.js"></script>
  <script type="text/javascript" src="../../js/jquery-ui.js"></script>
  <script type="text/javascript">
    // $('#message').autoResize();
  </script>

<br>


  <div class="def_cont">

<div class="HHU8hns">
  <i class="fa fa-circle fi_crl"></i>
  <span class="alt_text"><b><?php echo $ses_uname; ?></b></span>
  <br>

<span class="form-control y2"><i class="fa fa-users"></i>
  <select class="">
  <option> Everyone</option>
  </select>
</span>
</div>
<br>
  <form method="POST">

    <textarea class="txt" spellcheck="false" id="message" name="con" placeholder="What's on your mind?"></textarea>

    <button class="btn point btn-primary" name="post">Post</button>
    <span class="btn point btn-secondary" id="myBtn">&#128512;</span>

  </form>

  </div>    


</body>
</html>
