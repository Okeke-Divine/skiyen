<?php
session_start();
include("../../conn.php");
include("../../function.php");
include("../ver.php");
include("../ses.php");
if(isset($_REQUEST['rec_id'])){
  $rec_id = $_REQUEST['rec_id'];
  $ses_rec_uname = get_user_main($rec_id,'username');
?>

  <button class="wd100 btn btn text-dark dgijer"><i class="fa fa-bell" style="margin-right:10px;"></i> <span class="text">Mute Notification</span></button>

  <hr>
    
    <button class="wd100 btn btn text-black dgijer"><i class="fa fa-lock" style="margin-right:10px;"></i> <span class="text">Encryption</span></button>

  <hr>
  <button class="wd100 btn btn text-danger dgijer" onclick="block_user('<?php echo $rec_id; ?>');"><i class="fa fa-ban" style="margin-right:10px;"></i> <span class="text">Block <?php echo $ses_rec_uname; ?></span></button>

  <button class="wd100 btn btn text-danger dgijer"><i class="fa fa-thumbs-down" style="margin-right:10px;"></i> <span class="text">Report <?php echo $ses_rec_uname; ?></span></button>
<?php
}
?>