<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<?php

session_start();
$setted_group = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];


?>

<script type="text/javascript" src="../../../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<?php


include("../../../conn.php");
include("../../ses.php");
include("../../../css.php");
include("../../ver.php");
include("../../headers/home_group_chat.php");
$null = $setted_group;

?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $ses_uname; ?> | Group Members . <?php echo $null; ?> | <?php echo $site_name; ?></title>
</head>
<body>
<main role="main" class="container">

<div class="overlay" style="display: all;"></div>


  <section class="post_area">
      <div class="text" style="max-height: 300px;overflow: auto;">
      	<h3>Group Members - <?php echo $null; ?></h3>
        <?php

        $query = mysqli_query($conn,"SELECT * FROM $joined_groups WHERE gname = '$null'");
        while($row = mysqli_fetch_assoc($query)){
          $user = $row['user'];
          ?>
          <button class="btn btn" style="width: 100%;text-align: left;">


          <?php

          $pp = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$user' ORDER BY id DESC limit 0,1");
          while($row_pp = mysqli_fetch_assoc($pp)){
            $pp1 = $row_pp['profile_pic'];
            if($pp1 == ""){
              ?>
<i class="fa fa-user-circle" style="font-size: 40px;"></i>
              <?php
            }else{
              ?>
              <img src="../../all_user_profile_pic/<?php echo $pp1; ?>" alt="<?php echo $ses_uname; ?> profile picture" class="home_img" style="width: 40px;height: 40px;position: relative;margin-right: 5px;">
              <?php
            }
          }

          ?>
            <?php echo $user; ?>
              
            </button>
          <?php
        }

        ?>
      </div>

  </section>

</main>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function () {
  $(".text").click(function () {
    $(".overlay").fadeIn(500);
  });
  $(".overlay").not(".text").click(function() {
    $(".overlay").fadeOut(500);
  });
});
</script>
<style type="text/css">
  html{
    overflow: hidden;
  }
  @media(max-width: 700px){
    .text{
      max-height: 200px;
    }
  }
</style>