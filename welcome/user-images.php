<?php
if(isset($_GET['user'])){

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <?php 
  $name = $_GET['user'];

  // session_start();
  // include("ver.php");
  include("../conn.php");
  // include("ses.php");
  // include("headers/home.php");
  include("../css.php");
  include("../js.php");
  

  ?>
  <meta charset="utf-8">
  <meta name="decription" content="<?php echo $name; ?>'s profile picture">
  <meta name="keywords" content="skiyen,social networking">
  <meta name="robots" content="index,follow">
  <title><?php echo $name; ?>'s Profile Picture - Skiyen</title>
  <link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
  

  <?php


  $profile_config = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$name'");


  if(mysqli_fetch_assoc($profile_config)){

  $profile_config1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$name'");

  if(mysqli_fetch_assoc($profile_config1)){

  $profile_config2 = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$name'");
  $total = 0;
    while ($row_p = mysqli_fetch_array($profile_config2)) {
      $uname = $row_p['username'];
      $pp = $row_p['profile_pic'];
      if($pp == ""){
      	?>
<center>
	<br>
	<br>
<main role="main" class="container">

<h4 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125" style="width: 100%;">

<i class="fa fa-user-circle" style="font-size:150px;color:grey;"></i>
        <strong class="d-block text-gray-dark"><?php echo $uname; ?></strong>

        </h4>
    </main>
</main>
</center>

      	<?php
      }else{

      ?>

<main role="main" class="container">

<div class="ofdokfodf" id="ofdokfodf">
        <img class="impo_img" src="all_user_profile_pic/<?php echo $pp; ?>" alt="<?php echo $uname; ?>'s profile picture" id="user_profile_picture">
</div>



      <?php

    }
}
  }

  }else{
    ?>
    <br>
    <br>
    <main class="container" role="margin-top">
  		<div class="alert alert-danger">
    		The user <?php echo $name; ?> does not exit.
    	</div>
    <?php
  }

  ?>


</body>
</html>
<?php
}
?>
<style type="text/css">
html,body{
  background: black!important;
 }
</style>
<script type="text/javascript">
  screenify();
  function screenify(){
    var h = screen.availHeight - 120;
    document.getElementById('ofdokfodf').style.height = h+"px";
  }
</script>