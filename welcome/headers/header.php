<link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
<div class="site_loader-on-navbar" style="display: none;" id="sitelon">
  <div class="inner-loader"></div>
</div>
<div class="my-navbar-container">

  <span class="navbar-site-title" id="navbar-site-title">Skiyen</span>

<div class="my-navbar-button-controllers">
  <div class="navbar-link-container">
    <button class="text-light" onclick="navbar_click_button('/welcome/home')"><i class="fa fa-home"></i></button>
    <button class="text-light my-navbar-add-button" onclick="navbar_click_button('#create-items');"><i class="fa fa-plus-circle"></i></button>
  </div>

  <?php

  if(isset($_GET['zqq'])){
    $my_search_value = $_GET['zqq'];
  }else{
    $my_search_value = "";
  }

  ?>

  <form class="navabr-searchbox" action="/welcome/search/">
    <i class="fa fa-search"></i>
    <input type="search" name="zqq" placeholder="Search for people, pages, groups" value="<?php echo $my_search_value; ?>">
  </form>
  <button class="text-light my-navbar-search-button" onclick="navbar_click_button('/welcome/search/');"><i class="fa fa-search"></i></button>

  <div class="my-navbar-right-items">
    <button class="text-light" onclick="navbar_click_button('/welcome/find-people/');"><i class="fa fa-user-plus"></i></button>
    <button class="text-light" onclick="navbar_click_button('/welcome/skiyen_commincation/');"><i class="fa fa-comment-alt"></i>
      <?php
       $msg_query = mysqli_query($conn,"SELECT * FROM $private_messages WHERE reciever = '$ses_id' and viewed = '0'");
       if(mysqli_num_rows($msg_query) > 0){
        ?>
          <i class="fa fa-circle text-danger navbar-new-item-dot"></i>
        <?php
       }
      ?>
    </button>

    <button class="text-light" onclick="navbar_click_button('/welcome/skiyen-notifications/');">
      <i class="fa fa-bell"></i>
      <?php 
        $notification_query = mysqli_query($conn,"SELECT * FROM $follow_notification WHERE notification_owner = '$ses_id' and viewed = '0'");
        $notification_number = mysqli_num_rows($notification_query);
        if($notification_number > 999){
          $notification_number = "999+";
        }
        if($notification_number > 0){
      ?>
         <!-- <span class="navbar-notiication-bar"><?php echo $notification_number; ?></span> -->
      <i class="fa fa-circle text-danger navbar-new-item-dot"></i>

      <?php
          }
      ?>
    </button>

    <img src="/welcome/all_user_profile_pic/<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>" onclick="open_half_profile_box();">

  </div>
</div>

</div>

<div class="half_profile_box shadow-lg" id="half_profile_box">
    <button class="btn btn text-left">
      <img src="/welcome/all_user_profile_pic/<?php echo $ses_user_pp; ?>?r=cache" alt="<?php echo $ses_uname; ?>" class="my_nav_img">
      <?php echo $ses_uname; ?>
      <br>
      <?php echo date("D d/M/Y");?>
    </button>
    <hr>
    <!-- controls button -->

    <div class="control-btn-cont" onclick="navbar_click_button('/welcome/apps/');">
      <i class="fa fa-th"></i> Apps
    </div>

    <div class="control-btn-cont" onclick="navbar_click_button('/welcome/profile/?view=<?php echo $ses_uname; ?>');">
      <i class="fa fa-user"></i> My profile
    </div>
  
    <div class="control-btn-cont" onclick="navbar_click_button('/welcome/videos/');">
      <i class="fa fa-play-circle"></i> Videos
    </div>

    <div class="control-btn-cont" onclick="open_skiyen_post_page('');">
      <i class="fa fa-bullhorn"></i> Post
    </div>
  
    <div class="control-btn-cont" onclick="navbar_click_button('/welcome/forum/');">
      <i class="fa fa-comments"></i> Forum <span class="badge bg-primary">new</span>
    </div>

    <div class="control-btn-cont control-btn-cont-last-child" onclick="navbar_click_button('/welcome/menu/');">
      <i class="fa fa-cog"></i> Settings
    </div>

    <button class="btn btn" onclick="window.location = '<?php echo $page_self; ?>';">  <i class="fa fa-redo"></i> </button>
        <button class="btn btn" onclick="window.history.back();">  <i class="fas fa-chevron-circle-left"></i> </button>
        <button class="btn btn" onclick="window.history.forward();">  <i class="fas fa-chevron-circle-right"></i> </button>
        <button class="btn btn" onclick="close_half_profile_box()" style="padding-top: 0px;font-size:20px;font-weight: bolder;"> x</button>


</div>

<span id="url_container" style="display: none;"></span>
<script type="text/javascript">
  const click_button = new Audio();
  click_button.src = '/assets/audios/button click.mp3?r=cache_me';

  function navbar_click_button(dir){
    click_button.play();
    _('sitelon').style.display = 'block';
    setTimeout(load_url_skiyen,3000);
    _('url_container').innerHTML = dir;
  }

  function load_url_skiyen(dir){
    goto(_('url_container').innerHTML);
  }
  function open_half_profile_box(){
    _('half_profile_box').style.display = 'block';
  } 
  function close_half_profile_box(){
    _('half_profile_box').style.display = 'none';
  } 
</script>

<br>
<span class="navbar-next-br"><br></span>
