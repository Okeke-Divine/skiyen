<?php

include("../../../conn.php");

?>
<style type="text/css">
	html {
  font-size: 14px;
}
@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}


@media(min-width: 701px){
 .contrib {
    max-width: 960px;
    width: 35%;
  } 
}

@media(max-width: 701px){
 .contrib {
    max-width: 600px;
    width: 60%;
  } 
}

.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}

</style>

    <?php

    session_start();
    $null = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];

include("../../ses.php");    //also in ses.php


    $cid = "SELECT * FROM $null ORDER BY id DESC";
    $nut = mysqli_query($group_connection_server,$cid);
    if($nut){
      while($message_row = mysqli_fetch_array($nut)){
        $message_id = $message_row['id'];
        $message_uname = $message_row['sender'];
        $message = $message_row['message'];
        $message_date = $message_row['date'];
        $message_time = $message_row['time'];
        $message_deleted = $message_row['date'];
      ?>

      <div class="contrib" style="float: <?php if($message_uname == $ses_uname){echo "right";}else{echo "left";} ?>;width: 70%;border-radius: 15px;">
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal" style="text-align:left;color: black;">
          <?php

          $soll = $message_uname;
          $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$soll' LIMIT 0,1");
        while($ro = mysqli_fetch_array($dat)){
        $profile_pic = $ro['profile_pic'];
echo "<a class='black_link' href='../../profile/?view=".$message_uname."'>";
        if($profile_pic != ""){
                echo "<img alt='".$message_uname."'s profile picture' src='../../all_user_profile_pic/$profile_pic' style='border-radius:50%;height:20px;width:20px;'>";
              }else{
                echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
              }
              echo "</a>";
      }

          ?>
          <?php if($message_uname == $ses_uname){echo "Me";}else{echo $message_uname;} ?><span style="float: right;">
            <?php
            if($message_deleted != "1"){
              ?>
                <i class="fa fa-copy" style="cursor:pointer;color: grey;opacity: 0.9;font-size:15px;padding: 10px;" onclick="copy_message(<?php echo $message_id; ?>)"></i>
                <?php
              }
              ?>

            <?php 
            if($message_deleted != "1"){
            if($message_uname == $ses_uname){
              ?>
                <i class="fa fa-trash-alt" style="cursor:pointer;color: grey;opacity: 0.9;font-size:15px;padding: 10px;" onclick="delete_message(<?php echo $message_id; ?>)"></i>
              <?php
          }
        }
            ?>
          </span></h4>
      </div>
      <div class="card-body" id="<?php echo $message_id; ?>_copy_div" style="color: black;text-align: left;">
        <?php echo $message; ?><?php 
            if($message_deleted != "0"){
              ?>
                &nbsp;&nbsp;<i class="fa fa-trash-alt" style="cursor:pointer;color: grey;opacity: 0.5;font-size:10px;"></i>

              <?php
            }
        ?>
      </div>
      <span id="<?php echo $message_id; ?>_info" style="color: blue;margin-left:10px;"></span>
    </div>
  </div>
        <input style="position:fixed;bottom:0;right:500000px;z-index:0;opacity: 0;" type="" id="<?php echo $message_id; ?>_copy_message" value="<?php echo  $message;?>">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
<style type="text/css">

    <?php

    if($message_uname == $ses_uname){
      ?>
        <style type="text/css">
          .contrib{
            float: right;
          }
        </style>
      <?php
    }else{
      ?>
      <style type="text/css">
        .contrib{
          float: left;
        }
      </style>
      <?php
    }

    ?>


      <?php
      }
    }else{

    }

     ?>

     <br>
     <br>
     <br>
       <?php
     $cid = "SELECT * FROM $null WHERE date != '1'";
    $nut = mysqli_query($group_connection_server,$cid);
    $total = 0;
    $totl = 0;
      while($message_row = mysqli_fetch_array($nut)){
        $total = (int)1+$total;
        global $total;
        if($total > 999){
          $totall = '999+';
        }else{
          $totall = $total;
        }
      }
      if(!isset($totall)){
      	$totall = 0;
      }
?>
  <title><?php echo $ses_uname; ?> | (<?php echo $totall; ?>) . <?php echo $setted_group; ?> | <?php echo $site_name; ?></title>