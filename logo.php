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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
<link href="css/tabler.css" rel="stylesheet">
</head>
<body>
	<div class="page">
	<div class="page-single">
	<div class="container">
	<div class="row">
	<div class="col col-login mx-auto">
	<div class="text-center mb-6">
	<img src="logo/s1.png" alt="Skiyen">
	</div>
	<form class="card" action="process.php" method="POST">
	<div class="card-body p-6">
	<div class="card-title">Login</div>
	<div class="form-group">
	<label class="form-label" for="email">Username</label>
	<input type="text" class="form-control" placeholder="Username..." required="" name="uname">
	</div>
	<div class="form-group">
	<label class="form-label" for="password">Password</label>
	<input type="password" class="form-control" placeholder="Password..." required="" id="password" name="psw">
	</div>
	<div class="form-footer">
	<button type="submit" name="loggin" class="btn btn-primary btn-block">Login</button>
	</div>
	</div>
	</form>
	 <div class="text-center text-muted">
	Don't have account? <a href="register/">Sign Up</a>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	</div></div>
</body>
</html>