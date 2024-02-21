<script type="text/javascript">
              function logout(){
    window.location = "<?php echo $url_dir; ?>logout.php";
}
        </script>
<script src="/js/jquery.js"></script> 
      <span  class="sdsdsdsd"> 
	  <span class="skldfs">
	  <li>  <button id="btn_profile">
        
        <?php
        if(empty($ses_user_pp)){
          echo substr($ses_uname,0,1);
        }else{
            ?>
        <img src="<?php echo $img_dir; ?>all_user_profile_pic/<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>" class="my_nav_img">
        <?php
    }
    ?>

    </button>  </li> 
	  </span>            
      <uls>
        <button class="btn btn text-left">
          
          <!-- drop down button -->
 <?php
        if(empty($ses_user_pp)){
           

        ?>

        <style type="text/css">
            #btn_profile{
                background: grey!important;
                color: white!important;
                text-transform: uppercase;
            }
        </style>
        <?php
        }else{
            ?>
        <img src="<?php echo $img_dir; ?>all_user_profile_pic/<?php echo $ses_user_pp; ?>" alt="<?php echo $ses_uname; ?>" class="my_nav_img">
        <?php
    }
    ?>

    <?php echo $ses_uname; ?>
    <br>
   <?php echo date("d-M-Y");?>

        </button>
          <button class="btn btn drop_btn text-left" href="javascript:void(0)"  onclick="window.location = '<?php echo $img_dir; ?>apps/';" > Apps</button>

          <button class="btn btn drop_btn text-left"  href="javascript:void(0)"  onclick="window.location = '<?php echo $my_profile; ?>.php';" > My Profile</button>

          <button class="btn btn vidin drop_btn text-left"  href="javascript:void(0)" onclick="window.location = '<?php echo $videos; ?>.php';"> Video</button>

          <button class="btn btn drop_btn text-left"  href="javascript:void(0)" onclick="window.location = '<?php echo $post; ?>.php';"> Post</button>

          <button class="btn btn drop_btn text-left"  href="javascript:void(0)" onclick="window.location = '/<?php echo $welcome_dir; ?>/forum/';"> Forum <span class="badge badge-primary">new</span></button>



          <button class="btn btn drop_btn text-left"  href="javascript:void(0)" onclick="window.location = '<?php echo $my_account; ?>.php';"> Settings</button>

          <!-- <button class="btn btn drop_btn text-left"  href="javascript:void(0)" onclick="window.location = '<?php echo $img_dir; ?>forum';"> Forum <span class="badge badge-primary">new</span></button> -->

		  <button id="myBtn" class="btn btn drop_btn text-left"  href="javascript:void(0)"> Logout</button>
          <!--  -->
        <button class="btn btn" onclick="window.location = '<?php echo $page_self; ?>';">  <i class="fa fa-redo"></i> </button>
        <button class="btn btn" onclick="window.history.back();">  <i class="fas fa-chevron-circle-left"></i> </button>
        <button class="btn btn" onclick="window.history.forward();">  <i class="fas fa-chevron-circle-right"></i> </button>
        <button class="btn btn" onclick="close_nav_ede()" style="padding-top: 0px;font-size:20px;font-weight: bolder;"> x</button>

      </uls> 
	  </span>	
	


<style type="text/css">
	 .sdsdsdsd {
    z-index: 5;
     position: relative;
     display: inline-block;
}
 uls {
     list-style-type: none;
     top:45px;
     right:0px;
     max-height:700px;
     overflow:auto;
     width: 200px;
     background-color: white;
     font-weight:bold;
     position: absolute;
     display: none;
     box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
     z-index: 1;
     padding: 10px;
}
 
 .skldfs{
     width:178px;
     height:20px;
     border-radius:5px;
     color:white;
}
 .skldfs:before{
     content:"";
     position:absolute;
     border-color: white transparent transparent transparent;
     right:6px;
     top:18px;
}
 
</style>
<script type="text/javascript">
	$(document).ready(function() {
    // on click on  setting button
    $(".skldfs").click(function() {
        var val = $(this).attr('id');
        if (val == 1) {
            $("uls").hide();
            $(this).attr('id', '0');
        } else {
            $("uls").show();
            $(this).attr('id', '1');
        }

    });

    //Mouse click on setting button and uls list
    $("uls, .skldfs").mouseup(function() {
        return false;
    });

    //Document Click
    $(document).mouseup(function() {
        $("uls").hide();
        $(".skldfs").attr('id', '0');
    });

});


   function close_nav_ede(){
      var val = $(this).attr('id');
            $("uls").hide();
            $(this).attr('id', '0');      
    }
</script>


<div id="myModal" class="modalq">

  <!-- Modal content -->
  <div class="modal-contentq">
    <p>You are about to be logged out from your account...</p>
    <button class="btn btn-primary" onclick="logout()">Confirm</button>
    <button class="btn btn" id="cancel">Cancel</button>
  </div>

</div>
<style type="text/css">
    .modalq {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 10; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-contentq {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.closeq {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closeq:hover,
.closeq:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var close1 = document.getElementById("cancel");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
function games(){
  window.location = "../games/";
}
// When the user clicks on <span> (x), close the modal
close.onclick = function() {
  modal.style.display = "none";
}

close1.onclick = function() {
  modal.style.display = "none";
}
function gchat(){
    window.location = "../skiyen_comminicate.php";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>