<?php
	if(isset($_GET['error_type'])){
		@$error = $_GET['error_type'];
		if($error == 403){
			$error_tag = $error." Access Denied";
		}
		else if($error == 404){
			$error_tag = $error." Not Found";
		}
		else if($error == 400){
			$error_tag = $error." Bad Request";
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $error_tag; ?> - Skiyen</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/font/css/all.css">
  <link rel="stylesheet" href="/css/templatemo-host-cloud.css">
  <link rel="stylesheet" href="/css/owl.css">
</head>
<body>


<?php

if(isset($_GET['not_logged_in'])){
  echo '<script>window.location = "login?not_logged_in=true";</script>';
}


?>

<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#"><h2>Skiyen</h2></a>
          
          <div class="functional-buttons">
            <ul>
              <li><a href="/login">Log in</a></li>
              <li><a href="/register/">Sign Up</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    


	<?php

		if($error == "404"){
			?>


			<div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>
              	Object not found!<Br>
              	The requested url was not found on this server. If you entered the URL manually please check your spelling and try again.<br>
              	If you think this is a server error, please contact <a href="#" class="text-light">Us</a>.
              	<br>
              	<a class="text-light" id="server_name"></a>
				<br>
              	<button class="fa-1x btn btn text-light" onclick="window.history.back();"><i class="fa fa-angle-double-left"></i> Back</button>

              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
	var a = document.getElementById('server_name');
	a.innerHTML = window.location.protocol+"//"+window.location.hostname;
	a.href = "//"+window.location.hostname;
</script>
			<?php
		}


	?>

</body>
</html>
<?php
	}
?>
<style type="text/css">
  .banner {
  background-image: url(/logo/banner-bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 300px 0px;
  background-position: center center;
}
.banner .caption h2{
	text-transform: none!important;
	font-size: 25px!important;
	text-align: left!important;
}
</style>
 <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>