<!DOCTYPE html>
<html>
<title>Register - Skiyen</title>
<head>
  <link rel="shortcut icon" type="text/css" href="../logo/s1.png">
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
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../css/api_user.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../font/css/all.css">
</head>
<body>
  <div class="page">
  <div class="page-single">
  <div class="container">
  <div class="row">
  <div class="col col-login mx-auto">
  <div class="text-center mb-6">
  <img src="../logo/s1.png" alt="Skiyen" style="margin:0!important;">
  </div>
  <form class="card" style="position: relative;top:-25px;" action="process.php?i=1" method="POST">
  <div class="card-body p-6">
  <div class="card-title">Register</div>
    <?php  include("reg-info.php");?>
    <div class="form-group">
    <label class="form-label" for="uname">Username</label>
    <input type="text" id="uname" class="form-control" minlength="2" placeholder="Username..." required="" name="uname">
    </div>

     <div class="form-group">
    <label class="form-label" for="email">Email</label>
    <input type="email" id="email" class="form-control" placeholder="Email..." required="" name="email">
    </div>

  <div class="form-group">
  <label class="form-label" for="password">Password</label>
  <input type="password" class="form-control" minlength="5" placeholder="Password..." required="" id="password" name="psw">
  </div>

    <div class="form-group">
  <label class="form-label" for="password1">Confirm Password</label>
  <input type="password" class="form-control" minlength="5" id="password1" placeholder="Confirm Password..." required="" name="confirmpsw">
<span style="margin:0;" onclick="reveal_password()" ><i id="eye" class="fa fa-eye"></i></span>

  </div>

     <div class="form-group">
  <label class="form-label" for="scode">Secret Code</label>
  <input type="text" class="form-control" minlength="5" placeholder="Secret Code..." required="" id="scode" name="scode">
  </div>

<input type="radio" required="" id="male" class="checkbox" value="Male" name="gender"><lable for="male">Male</lable>
     <input type="radio" required="" id="female" class="checkbox" value="Female" name="gender"><label for="Female">Female</label><br>


  <div class="form-footer">
  <button type="submit" name="reg" class="btn btn-primary btn-block">Register</button>
  </div>
  <br>
   <div class="text-center text-muted">
  Already have account? <a href="../login">Sign In</a>
  </div></div>

  </form>
  
  </div>
  </div>
  </div>
  </div>
  </div>

  </div></div>
</body>
</html>
<script type="text/javascript">
  function _(el){
    return document.getElementById(el);
  }
  function reveal_password() {
      var x = _("password");
      var y = _("password1");
      var eye = _("eye");
      if (x.type === "password"){
        x.type = "text";
        eye.classList.add("fa-eye-slash");
      } else {
        eye.classList.remove("fa-eye-slash");
        x.type = "password";
      }
      if (y.type === "password"){
        y.type = "text";
    } else {
      y.type = "password";
    }
  }
</script>