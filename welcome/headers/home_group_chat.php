 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  document.getElementById("info_copy").value = "copied";
}
</script>

  <?php


$null = $setted_group;
  ?>


<header>
        <nav_skiyen>
            <ul>
                <li> <button onclick="window.history.back();" id="search_btn" class="tooltip_ski" data-tooltip="Back"> <i class="fas fa-chevron-circle-left"></i> </button> </li>
                
                <li id="space2"></li>
                
                <li> <a class="tooltip_ski" data-tooltip="<?php echo $null; ?>" href="../dst/" id="group"> <i class="fas fa-comment"></i> </a></li>

                <li> <a class="tooltip_ski" data-tooltip="Group Members" href="group-members" id="group"> <i class="fas fa-user-friends"></i> </a></li>

                <li> <a class="tooltip_ski" data-tooltip="Group Info" href="#s" id="group" onclick="show_info()"> <i class="fas fa-info-circle"></i> </a></li>
             
                <li> <a class="tooltip_ski" data-tooltip="Group Setting" href="group-settings" id="friend"> <i class="fas fa-cog"></i> </a> </li>
                <li id="space1"></li>
                <?php

$query_info1 = "SELECT * FROM $groups WHERE name = '$setted_group'";
$data_info1 = mysqli_query($conn,$query_info1);

  while($row_info_one = mysqli_fetch_array($data_info1)){
    $group_o_one = $row_info_one['owner'];
    $group_id_one = $row_info_one['id'];
    if($ses_uname == $group_o_one){
      ?>
        <li>  <button class="tooltip_ski" onclick="window.location = 'admin-settings';" data-tooltip="Admin Settings" id="btn_profile"><i class="fas fa-cogs"></i></button>  </li>
        <?php
    }else{
 ?>
        <li>  <button class="tooltip_ski" data-tooltip="Coming Soon" id="btn_profile"><i class="fa fa-spinner fa-spin"></i></button>  </li>
        <?php
    }
  }

?>
         
            </ul>
        </nav_skiyen>
    </header>


<?php

if($null == ""){
  ?>
  <script type="text/javascript">
    window.location = "../../home.php";
  </script>
  <?php
}
$confirm = "SELECT * FROM $groups WHERE name = '$null'";
$nutt = mysqli_query($conn,$confirm);

if(mysqli_fetch_assoc($nutt)){

?>


<?php
include("../../ses.php");
include("head.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

  






<style>
body {font-family: Arial, Helvetica, sans-serif;}
.settings{
	background: transparent;
	border:0;
	color: white;
}
/* The Modal (background) */
.modal {
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
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  color: white;
}

.modal-header,.modal-footer{
	background: rgb(60,60,60);
}

.modal-body {padding: 2px 16px;color: black;}

.modal-footer {
  padding: 2px 16px;
  color: white;
}
</style>




<style type="text/css">
  .group_des{
    
  }
</style>
<style>
/* The Modal (background) */
.modallll {
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
.modal-contentttt {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close_info {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close_info:hover,
.close_info:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>


<!-- The Modal -->
<div id="info_modal" class="modallll" style="z-index: 10;">

  <!-- Modal content -->
  <div class="modal-contentttt" style="height: auto;overflow: auto;width:98%;position: fixed;top:10px;left:0;">
    <span class="close_info">&times;</span>
    <div id="info" style="">
  
<?php



$query_info = "SELECT * FROM $groups WHERE name = '$setted_group'";
$data_info = mysqli_query($conn,$query_info);

if($data_info){
  while($row_info = mysqli_fetch_array($data_info)){
    $group_name = $row_info['name'];
    $group_id = $row_info['id'];
    global $group_id;
    $group_des = $row_info['description'];
    $group_sec = $row_info['security'];
    $group_owner = $row_info['owner'];
    global $group_owner;
    $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'] = $group_owner;
    $group_tc = $row_info['time_created'];
    $group_dc = $row_info['date_created'];
    $views = $row_info['views'];
    global $views;
    $group_picture = $row_info['group_picture'];
?>
<?php
    echo '
    <div style="display:block;">
    <div style="width:100%!important;height:auto;text-align:center;"><span style="font-size:50px;">';

    if($group_picture !=""){
      echo "
      <a href='../../all_group_profile_picture/$group_picture?group=$ses_uname'><img alt='picture does not exit' src='../../all_group_profile_picture/$group_picture' style='border-radius:50%;height:100px;width:100px;'></a>
      ";
    }else{
      echo substr(ucfirst($group_name),0,1);
    }
    
    echo '
    </span>
    </div>
    <div style="width:100%!important;height:auto;" class="group_des">
      <h4 class="my-0 font-weight-normal" style="text-align:left;color: black;">';echo $group_name; echo '</h4>
      <span style="color: black;text-align: left;font-size:15px;word-wrap: break-word;">
        ';
        echo $group_des;
        echo '<br>
      </span>
      <span style="color: black;text-align: left;font-size:15px;">
        ';
        echo ucfirst($group_sec).' group';
        echo '<br>
      </span>
       <span style="color: black;text-align: left;font-size:15px;">
        ';
        echo 'Created on '.$group_dc.' - '.$group_tc;
        echo '<br>
      </span>
       <span style="color: black;text-align: left;font-size:15px;">
        ';$viewss = (int)$views+1;
        if($viewss > 999){
          $viewsss = '999+';
        }else{
          $viewsss = $viewss;
        }
        echo 'Group admin <a style="color:black;" href="../../profile/?view='.$group_owner.'">'.ucfirst($group_owner).'</a>';
        echo '<br>
      </span>
       <span id="total" style="color: black;text-align: left;font-size:15px;"><i class="fa fa-eye"></i>
       '.$viewsss.'
       </span>
    </div>
    ';
    $views_updated = (int)$views+1;
  }
  $update = "
UPDATE $groups
SET views = '$views_updated'
WHERE name = '$null';
";
$views_update = mysqli_query($conn,$update);

}
?>
  </div>
</div>
   </div>
   <span><input type="text" readonly="" style="color: blue;border:0;width: 70%;" id="myInput" value="<?php echo "http://skiyen.rf.gd/welcome/group/dst/add.php?rname=$setted_group"; ?>"><button style="background: transparent;border:1px solid black;padding:15px;cursor: pointer;margin-left: 5px;" onclick="myFunction()"><i class="fa fa-copy" style="color: black;"></i></button><input id="info_copy" readonly="" style="color: black;border:0;"></span>
</div>
  </div>

</div>

<script>
// Get the modal
var info_mod = document.getElementById("info_modal");

// Get the button that opens the modal
var btne = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var spane = document.getElementsByClassName("close_info")[0];

// When the user clicks the button, open the modal 
 function show_info(){
  info_mod.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spane.onclick = function() {
  info_mod.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
   if (event.target == info_mod) {
    info_mod.style.display = "none";
  }
}
// When the user clicks anywhere outside of the modal, close it

</script>
<?php
}else{
?>
  <script type="text/javascript">
    window.location = "../../home.php";
  </script>
<?php
}
?>

<style type="text/css">
   @media  screen and (max-width: 700px){
                nav_skiyen ul{
                  justify-content: space-between;
                  width: 100%!important;
                }
          
            }
</style>
<style type="text/css">
  body,html{
    background: #eee!important;
    overflow-x: hidden;
  }
</style>