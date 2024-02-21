<?php 
session_start();
include("../../conn.php");
include("../../css.php");
include("../ses.php");
include("../ver.php");
include("../headers/my_profile.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../font/css/all.css"><title><?php echo $ses_uname; ?> . Profile Picture . Skiyen</title></head><body>
		<script src="/js/jquery.js"></script>  
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/croppie.js"></script>
		<link rel="stylesheet" href="/css/bootstrap.css" />
		<link rel="stylesheet" href="/css/croppie.css" />
    </head>  
    <body>  
    
          <br />
    <main class="container" role="main">
        <div class="container shadow-sm p-5">
      <h3 align="left">Profile Picture</h3>
			<div class="panel panel-default">
  				<div class="panel-heading">Select Profile Image</div>
  				<div class="panel-body" align="left">
  					<input type="file" name="upload_image" id="upload_image" />
  					<br />

            <br>
            <?php

            include("remove_profile_pic.php");

            ?>

  					<div id="uploaded_image"></div>
  				</div>
  			</div>
  		</div>
    </body>  
</html>

<div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Crop and Upload Image</h4>
      		</div>
      		<div class="modal-body">
  					<div class="col-md-8 text-center">
						  <div id="image_demo" style="width:350px;height:300px;margin-top:30px"></div>
  						<br/>
					</div>
      		</div>
      		<div class="modal-footer">
              <button class="btn btn-success crop_image"> Upload Image</button>
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
    </div>
</div>
</main>
<script type="text/javascript">  
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('Image binding successfull');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });

});  
</script>

<?php
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>	