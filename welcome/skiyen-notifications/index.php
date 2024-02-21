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
  <title><?php echo $ses_uname; ?> | Notifications | <?php echo $site_name; ?></title>
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/sweetalert.css?r=cache">
  <script type="text/javascript" src="/js/sweetalert.js?r=cache"></script>
</head>

<body>
<br>


<main class="container" role="main">
<!-- <span>&#10004;</span> -->
<!-- <span>&#10004;</span> -->
<?php

if(isset($_GET['maar'])){
  
     mysqli_query($conn,"UPDATE $follow_notification
                        SET viewed = '1'
                        WHERE notification_owner = '$ses_id';
            ");
     echo '<script>window.location = "./";</script>';


}

?>
<!-- <div class="my-3 p-3 bg-white rounded shadow-sm"> -->
    <!-- <div class="media text-muted pt-3"> -->
      <h4 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125 border-gray">
        <strong class="d-block text-gray-dark">Notifications</strong>
 

          <?php

          $noti = mysqli_query($conn,"SELECT * FROM $follow_notification WHERE notification_owner = '$ses_id'");

          if(mysqli_fetch_assoc($noti)){
            $noti1 = mysqli_query($conn,"SELECT * FROM $follow_notification WHERE notification_owner = '$ses_id' ORDER BY id DESC");
?>
 <!-- <div  class="sdsdsdsd"> 
    <div class="skldfs">
    <li>  
      <button class="btn btn" style="font-size: 30px;font-weight: bolder;">&#8230;</button>  
    </li> 
    </div>            
      <uls>
            <a href="?maar=true">Mark all as read</a>
      </uls> 
    </div>  -->
            <a href="?maar=true">Mark all as read</a>
<?php
            while($notify = mysqli_fetch_array($noti1)){
              $message = $notify['message'];
              $url = $notify['url'];
              $td = date("Y-m-d"." "."H:i:s",$notify['time']);
              $viewed = $notify['viewed'];
              $noti_id = $notify['id'];
              $item_type = $notify['item_type'];
              $item_id = $notify['item_id'];
              ?>

        <button class="btn btn wd100  notification_button m-1 mb-1" id="<?php echo $noti_id; ?>_box" style="font-size:20px;width: 100%;" onclick="viewed('<?php echo $noti_id; ?>','<?php echo $url; ?>')">
                  <?php
                   if($item_type == "user>follow"){
                    $image_alt_text = get_user_main($item_id,'username');
                    $image_src = get_user_main($item_id,'profile_pic');
                    ?>
                    <img src="../all_user_profile_pic/<?php echo $image_src; ?>?r=<?php echo $image_src; ?>" alt="<?php echo $image_alt_text; ?>" class="my_nav_img">  
                    <span class="notif_fol"><i class="fa fa-user-friends"></i></span>
                    <?php
                  }else if($item_type == "user->password_settings"){
                    $image_alt_text = get_user_main($item_id,'username');
                    $image_src = get_user_main($item_id,'profile_pic');
                    ?>
                    <img src="../all_user_profile_pic/<?php echo $image_src; ?>?r=<?php echo $image_src; ?>" alt="<?php echo $image_alt_text; ?>" class="my_nav_img">  
                    <span class="notif_fol"><i class="fa fa-cog"></i></span>
                    <?php
                  }
                  ?>

                  <span class="notification_message"><?php echo $message; ?></span>
                  

                  <span class="right">
                    <time style="font-size: 15px;" class="notifications-time text-grey timeago" datetime="<?php echo $td; ?>"><?php echo $td; ?></time>
                    <?php
                      if($viewed == 0){
                    ?>
                        <span class="right" id="<?php echo $noti_id; ?>v"><i class="fa m-1 fa-circle text-primary" style="font-size: 10px;position: relative;top:3px;"></i> </span>
                    <?php 
                      }
                    ?>
                  </span>
        </button>

              <?php
            }

          }else{
            echo "<br>No notifications here";
          }


          ?>

        </h4>
    </div>
</div>
</main>
</body>
</html>
<style type="text/css">
  .not_viewed{
        background: rgba(153,204,255,0.3);
    }
</style>
 <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/jquery.timeago.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    $("time.timeago").timeago();
  });
</script>
<script type="text/javascript">

    function viewed(id,url){
      if(id != ""){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location = "../noti_fy/"+url;
        }
        };
        xmlhttp.open("GET", "viewed.php?noti_id="+id, true);
        xmlhttp.send();
        _(id+"v").innerHTML = "";
      }
    }

</script>


<style type="text/css">
   .sdsdsdsd {
        z-index: 5;
     position: relative;
     display: inline-block;
}
 uls {
     list-style-type: none;
     top:45px;
     right:0px;
     width: 200px;
     background-color: white;
     font-weight:bold;
     position: absolute;
     display: none;
     box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
     z-index: 1;
     padding: 10px;
}
 
 .skldfs{
     width:178px;
     height:20px;
     border-radius:5px;
     color:white;
}
 .skldfs:before{
     content:"";
     position:absolute;
     border-color: white transparent transparent transparent;
     right:6px;
     top:18px;
}
 
</style>