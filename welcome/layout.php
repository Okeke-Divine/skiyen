<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
 
    <?php 

  session_start();
  include("../conn.php");
  include("ses.php");
  include("../css.php");
  include("ver.php");
  include("headers/home.php");
  
  ?>
  <link rel="stylesheet" type="text/css" href="../font/css/all.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="shortcut icon" href="../logo/s1.png">
  <title><?php echo $ses_uname; ?> | Read More | <?php echo $site_name; ?></title>
</head>
<body>
	<br><br><br>

	<?php include("../conn.php"); $id = $_GET['id']; $qwert = "SELECT * FROM $user_post WHERE id = '$id'";
	 $data = mysqli_query($conn,$qwert); 

	while($row = mysqli_fetch_array($data)){
		$u = $row['username'];
		$pos = $row['post'];
		global $u;
		 $time = $row['time'];
		 $pos_id = $row['id'];
		 $pstrlen = strlen($pos);
      
		  ?>

		
		<div class="txt" style="border-radius: 0px;" readonly>
			
			<h4><a href="profile/?view=<?php echo $u; ?>" class="pos_link">
				<?php
				  	$dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$u' LIMIT 0,1");
      while($ro = mysqli_fetch_array($dat)){
        $profile_pic = $ro['profile_pic'];

        if($profile_pic != ""){
                echo "<a href='all_user_profile_pic/$profile_pic?user=$u'><img alt='could not be loaded' src='all_user_profile_pic/$profile_pic' style='border-radius:50%;height:20px;width:20px;'></a>";
              }else{
                echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
              }
          }
				?>
				<?php echo $u; ?></a></h4>

			<?php echo ucfirst($pos); ?>

		</siv>


	<?php } ?>	


  </main>
</body>
</html>
<?php

$query = "SELECT * FROM $views";
$data = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($data)){
  $view = $row['views'];
  $new_views = $view+1;
  $update_views_skiyen = "UPDATE $views
  SET views = '$new_views'
  WHERE id = '1'
  ";
  mysqli_query($conn,$update_views_skiyen);
}

?>