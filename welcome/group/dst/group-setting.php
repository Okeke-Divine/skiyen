<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<?php

session_start();
$go = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'];


?>

<script type="text/javascript" src="../../../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<?php


include("../../../conn.php");
include("../../../css.php");
include("../../ses.php");
include("../../ver.php");
include("../../headers/home_group_chat.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $ses_uname; ?> | Group Settings . <?php echo $null; ?> | <?php echo $site_name; ?></title>
</head>
<body>
<main role="main" class="container">

<div class="overlay" style="display: all;"></div>

  <section class="post_area">
      <div class="text" style="max-height: 300px;overflow: auto;">
      	<h3>Group Settings - <?php echo $null; ?></h3>


        <button onclick="window.location = 'add-users';" type="submit" name="add" class="btn btn-primary left"><i class="fa fa-plus"></i> Add users</button>

<?php

if($ses_uname == $go){
  ?>
<button class="btn btn-danger"> <i class="fa fa-sign-out-alt"></i>You can't leave this group instead delete it</button>

  <?php
}else{
  ?>
<button class="btn btn-danger" onclick="window.location = 'main_settings?action=leave-group';"> <i class="fa fa-sign-out-alt"></i> Leave Group</button>

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