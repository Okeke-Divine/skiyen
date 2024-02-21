<!DOCTYPE html>
<html>
<title>Login - Skiyen</title>
<head>
  <link rel="shortcut icon" type="text/css" href="logo/s1.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Skiyen - The multi social networking platform">
  <meta name="author" content="Okeke Divine-Vessel">
  <meta name="google-site-verification" content="eDDZHpLjtAQr6Mr4tcyjEMlx8_JqM5Qb8L_-gU_r_OA" />
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="en">
  <html dir="ltr" lang="en">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css?r=cache">
  <link href="css/api_user.css?r=cache" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font/css/all.css?r=cache">
  <link rel="stylesheet" type="text/css" href="/css/w3/css/w3.css?r=cache">
</head>
<body>
  <div class="page">
  <div class="page-single">
  <div class="container">
  <div class="row">
  <div class="col col-login mx-auto">
  <div class="text-center mb-6">
  <img src="logo/s1.png" alt="Skiyen" style="margin:0!important;">
  </div>


<?php

	include("login_helper.php");
  if(isset($_GET['back_to'])){
    $back_to = $_GET['back_to'];
  }else{
    $back_to = "welcome/";
  }

?>


  <form class="card" style="position: relative;top:-25px;" action="process.php" method="POST">
  <div class="card-body p-6">
  <center><div class="card-title">Login</div></center>
  <div class="form-group">
    <?php

    include("login_info.php");

    ?>
  <label class="form-label" for="email">Username</label>
  <input type="text" class="form-control" placeholder="Username..." required="" name="uname">
  </div>
  <div class="form-group">
  <label class="form-label" for="password">Password</label>
  <input type="password" class="form-control" placeholder="Password..." required="" id="password" name="psw">
  </div>
  <div class="form-footer">
    <input type="hidden" name="back_to" value="<?php echo $back_to; ?>">
  <button type="submit" name="loggin" class="btn btn-primary btn-block">Login</button>
  </div>
 <br>
    <div class="text-center text-muted">
  Don't have account? <a href="register/">Sign Up</a>
  <br>
  Forgotten Your Password? <a href="r/">Reset Password</a>
  </div>
   </div>
  </form>

  </div>
  </div>
  </div>
  </div>
  </div>

  </div></div>
</body>
</html>
<style type="text/css">
  .hrz2{
    position: relative;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    margin-left: 10px;
}
.png{
  position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>