<div class="flexexx1">
<?php
$gen_error = array();
//for checking the number of the current users followers
$ea1 = "
SELECT * FROM $followers WHERE user_id = '$ses_id'";
$ep1 = mysqli_query($conn,$ea1);
$total_follow = 0;
while($row = mysqli_fetch_array($ep1)){
  $total_follow = $total_follow + 1;
  global $total_follow;
}
if($total_follow < 10){
  $gen_error[] = "err1";
?>

<!----------------------------------------------------- //-->

 <!-- <div class="view_box" id="follow_box">
  <div class="alert alert-light shadow-sm">
    <div class="point"  onclick="search()">
        <strong class="d-block text-gray-dark"><?php echo $ses_uname; ?></strong>
        You have followed <?php echo $total_follow; ?>/10 people.<br>
        You still have to follow at least <?php echo 10 - $total_follow;?> people.
       <br>
       <br>
     </div>
       <button onclick="notnow_follow()" class="btn btn-secondary">Not Now</button>
      </h4>
      <script type="text/javascript">
          function _(el){
             return document.getElementById(el);
          }
          function search(){
            window.location = "search/";
          }
        function notnow_follow(){
          _('follow_box').style.display = "none";
        }
     </script>


    </div>
  </div> -->
<?php
}
?>

<?php

$ea = "
SELECT * FROM $user_table WHERE username = '$ses_uname'
 and 
 profile_pic = ''";
$ep = mysqli_query($conn,$ea);

if(mysqli_fetch_assoc($ep)){
  $gen_error[] = "err2";
?>

<!----------------------------------------------------- //-->

  <div class="view_box" id="profile_picture_box">
  <div class="alert alert-light shadow-sm">
    <div class="point"  onclick="pp()">
        <strong class="d-block text-gray-dark"><?php echo $ses_uname; ?></strong>
       You have not added your profile picture.<br>
       It helps other users identify you and diffrenciate your from others who their user names may match your own
       <br>
       <br>
     </div>
       <button onclick="notnow_profile()" class="btn btn-secondary">Not Now</button>
      </h4>
      <script type="text/javascript">
          function _(el){
             return document.getElementById(el);
          }
          function pp(){
            window.location = "profile_picture/";
          }
        function notnow_profile(){
          _('profile_picture_box').style.display = "none";
        }
     </script>
    </div>
  </div>
<?php
}
?>
<!--  --><?php

$check_post = mysqli_query($conn, "SELECT * FROM $user_post WHERE username = '$ses_uname'");

if(mysqli_fetch_assoc($check_post)){

}else{
  $gen_error[] = "err3";
?>


<!----------------------------------------------------- //-->

 <div class="view_box" id="post_tag">
  <div class="alert alert-light shadow-sm">
    <div class="point"  onclick="post()">
        <strong class="d-block text-gray-dark"><?php echo $ses_uname; ?></strong>
       You have not created any post!<br>
       Try it out.
       <br>
       <br>
     </div>
       <button onclick="notnow()" class="btn btn-secondary">Not Now</button>
      </h4>
    </div>
  </div>



<script type="text/javascript">
  function _(el){
    return document.getElementById(el);
  }
  function post(){
    window.location = "post/?item=first post";
  }
  function notnow(){
    var hide = _("post_tag");
    hide.style.display = "none";
  }
</script>
<?php
}
?>
<?php

  $joined_group = mysqli_query($conn, "SELECT * FROM $joined_groups WHERE user = '$ses_uname'");

    if(mysqli_fetch_assoc($joined_group)){

    }else{
  $gen_error[] = "err4";
      ?>

 <div class="view_box" id="group_tag">
  <div class="alert alert-light shadow-sm">
    <div class="point"  onclick="join_g()">
        <strong class="d-block text-gray-dark"><?php echo $ses_uname; ?></strong>
        Start a chat with people from all over the world.<br>
        <b>Join a group</b><br>
      </div>
      <br>
       <button onclick="notnow1()" class="btn btn-secondary">Not Now</button>
      </div>
  </div>
<?php
    }
?>
<script type="text/javascript">
  function _(el){
    return document.getElementById(el);
  }
  function join_g(){
    window.location = "search/";
  }
  function notnow1(){
    var hide = _("group_tag");
    hide.style.display = "none";
  }
</script>

</h4>
</div>
</div>

<?php
if(!empty($gen_error)){
?>
<script>
  // _('reciever').innerHTML ='<a href="#content" class="btn btn">Skip to Post(s)</a>';
</script>
<?php
}
?>
</div>
