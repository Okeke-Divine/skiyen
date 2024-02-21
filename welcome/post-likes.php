<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="decription" content="View numer of likes on a post here">
<meta name="keywords" content="skiyen,social networking,likes,post,post likes">
<meta name="robots" content="index,follow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font/css/all.css">
<?php
session_start();
include("../conn.php");
include("../js.php");
include("../css.php");
include("ses.php");
include("ver.php");
include("headers/home.php");
?>
  <title><?php echo $ses_uname; ?> | View Post Likes | <?php echo $site_name; ?></title>
</head>
<body>

<?php

$spn = $_GET['post'];

$verify_post = mysqli_query($conn,"SELECT * FROM $user_post WHERE id = '$spn'");

if(mysqli_fetch_assoc($verify_post)){
?>
 <?php

  include("../js.php");
  include("../conn.php");

  $data = mysqli_query($conn, "SELECT * FROM $user_post WHERE id = '$spn' ORDER BY id DESC");

  while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $uname = $row['username'];
    $post = $row['post'];
    $post_num = strlen($post);
?>
<main class="container" role="main">
  <center>
    <div id="<?php echo $id; ?>_post_div" class="my-3 p-3 bg-white rounded shadow-sm" style="width: 97%;text-align: left;">
    <div class="media text-muted pt-3">
      <h3 style="font-size: 20px;" class="media-body pb-3 mb-0 small lh-125">

        <strong class="post_img">
          <?php
           $dat = mysqli_query($conn, "SELECT * FROM $user_table WHERE username = '$uname' LIMIT 0,1");
      while($ro = mysqli_fetch_array($dat)){
        $profile_pic = $ro['profile_pic'];

        if($profile_pic != ""){
                echo "<a href='user-images.php?user=$uname'><img alt='".$uname."'s profile picture' src='all_user_profile_pic/$profile_pic' class='profile_pic_s'></a>";
              }else{
                echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
              }
      }

        ?>
        </strong>
        <strong class="text-gray">
          <a href="profile/?view=<?php echo $uname; ?>" style="color: black;text-decoration: none;"><?php echo $uname; ?></a></strong> - <i>created a post</i>
       
<!-- open like div -->
<div class="post_likers">
  <main class="container" role="main">
            <?php

              $num_like = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id'");
              $total = 0;
              if(mysqli_fetch_assoc($num_like)){
                $total_likes = mysqli_query($conn,"SELECT * FROM $post_reactions WHERE post_id = '$id' ORDER BY id DESC");
                ?>
<?php
                while($likes1 = mysqli_fetch_array($total_likes)){

                	$who_liked = $likes1['username'];
					$td = date("Y-m-d"." "."H:i:s",$row['time']);
                	?>

                	<div class="block" style="height: 50px;">
                		<?php
                		$profile_pic1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$who_liked' and profile_pic !=''");
                		if(mysqli_fetch_assoc($profile_pic1)){

                		$profile_pic1 = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$who_liked' and profile_pic !=''");

                			while($ro = mysqli_fetch_array($profile_pic1)){

        					$profile_pic = $ro['profile_pic'];


                			 echo "<a href='user-images.php?user=$who_liked'><img alt='".$who_liked."'s profile picture' src='all_user_profile_pic/$profile_pic' class='like_and_comment_pp'></a>";
                			}

                		}else{
                			?>
                			<i class="fa fa-user-circle"></i>
                			<?php
                		}

                		?>
                		<a style="color: black;" href="profile/?view=<?php echo $who_liked; ?>"><?php echo $who_liked; ?></a>
                	</div>


                	<?php
                }
              

              }else{
                echo "0 people liked this";
              }
            ?>
</div>
<!-- close likesdiv -->
</main>
<!-- close like main -->
        </div>

  </div>
  </center>
</main>

<?php

  }
}


?>

</body>
</html>