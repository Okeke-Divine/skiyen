  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery1.js"></script>
  <script type="text/javascript" src="../../js/jquery-ui.js"></script><link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
<?php
if(isset($_POST['delete'])){?>
<title>Handle...</title><?php session_start();include("../ver.php");include("../ses.php");include("../../css.php");include("../../conn.php");include("../headers/my_profile.php"); ?>

<br><br><br></div>

<div class="glon" style="margin:5px;">
    <br>
    <center>
  <span class="text-danger">
  Are you sure you want to delete this post?</span>
  <hr>
  <form action="1.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

    <button name="del" type="submit" class="btn btn-danger">
    Delete</button> &nbsp;&nbsp;
  <button type="button" onclick="index()" class="btn btn-primary">Cancel</button></center>
</div>
  </form>

<?php
}

else if(isset($_POST['edit'])){?>
<title>Post...</title><?php session_start();include("../ver.php");include("../ses.php");include("../../conn.php");include("../../css.php");include("../headers/my_profile.php");?>
<br><br><br><main role="main" class="container">


 <section class="post_area">
      <div class="text">
        <form action="2.php" method="POST">
<?php
 $pp = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$ses_id'");
          while($row_pp = mysqli_fetch_assoc($pp)){
            $pp1 = $row_pp['profile_pic'];
            if($pp1 == ""){
              ?>
<i class="fa fa-circle" style="font-size: 40px;"></i>
              <?php
            }else{
              ?>
              <img src="../all_user_profile_pic/<?php echo $pp1; ?>" alt="<?php echo $ses_uname; ?> profile picture" class="home_img">
              <?php
            }
          }
            ?>

        <textarea name="con" class="post_text_area" id="message" placeholder="What's in your mind"><?php echo $_POST['content']; ?></textarea>
<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
        
        <input class="btn-primary" type="submit" name="edit" value="Save"/>
        <span class="btn btn emoji_cont" id="myBtn">&#128512;</span>
  </form>
      </div>
    </section>
    <div class="overlay"></div>


</main>
<?php
}
else{
	echo "<script>window.location = 'index.php';</script>";	
}
?>

<style type="text/css">
	/* The Modal (background) */
.mo {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.mo-content {
  background-color: grey;
  opacity: 0.8;
  border-radius: 5px;
  margin: auto;
  position: fixed;
  bottom:0;
  left:0;
  padding: 20px;
  height: 200px;
  overflow: auto;
  border: 1px solid #888;
  width: 100%;
}
.mo-content:hover{
  opacity: 1;
}

/* The Close Button */
.cls {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.cls:hover,
.cls:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<div id="mo" class="mo">
  <div class="mo-content" style="">
    <span class="cls">&times;</span>
      <?php

  $fetch_item = "SELECT * FROM emoji";
  $fetched = mysqli_query($conn,$fetch_item);

  while($row = mysqli_fetch_array($fetched)){
    $emoji = $row['code'];
    ?>
    <span onclick="emoji('&#<?php echo $emoji; ?>;')" class="emoji">&#<?php echo $emoji; ?>;</span>
    <?php
  }

  ?>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("mo");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("cls")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">
	function _(el){
		return document.getElementById(el);
	}
	function emoji(item){
		_('message').value += item+"";
	}
</script>
  <?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>
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