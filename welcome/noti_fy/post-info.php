
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="shortcut icon" href="../../logo/s1.png">
  <meta name="keywords" content="skiyen,social networking">
  <meta name="robots" content="index,follow">
  <script type="text/javascript" src="../../js/jquery.js"></script>
    <?php 


  session_start();
  include("../../conn.php");
  include("../ses.php");
  include("../../css.php");
  include("../headers/settings.php");
  include("../ver.php");
  

  ?>
  <title>Post . <?php echo $ses_uname; ?></title>
</head>

<main class="container" role="main">
  <br>

  <?php

    echo get_post($_GET['for']);

  ?>

</main>

</body>
</html>

  <?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>

<script type="text/javascript">

      var ses_id = "<?php echo $ses_id; ?>";
  
  function like_post(id,uid){
      var formdata = new FormData();
      formdata.append("id", id);
      var foor = uid;
      var ajax = new XMLHttpRequest();
      formdata.append("foor", foor);
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../like.php");
      ajax.send(formdata);
      document.getElementById(id).style.display = "none";
      var unlikeagain = '<button id="'+id+'" class="btn btn text-primary tooltip_ski" data-tooltip="Unlike" style="display: flex;" onclick="unlike(id)"> class="fa fa-thumbs-up"></i></button>';
      document.getElementById(id+"info_like").innerHTML = unlikeagain;
  }

   function unlike(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      // ajax.addEventListener("load",completeHandler,false);
      ajax.open("POST","../unlike.php");
      ajax.send(formdata);
      document.getElementById(id).style.display = "none";
      var likeagain = '<button id="'+id+'" class="btn btn tooltip_ski text-dark" style="display: flex;" data-tooltip="Like" onclick="like_post(id,ses_id)"><i class="fa fa-thumbs-up"></i></button>';
      document.getElementById(id+"info_like").innerHTML = likeagain;
  }
  function _(el){
    return document.getElementById(el);
  }
           $("time.timeago").timeago(); 
</script>