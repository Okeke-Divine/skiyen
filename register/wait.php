<br>
<link rel="stylesheet" type="text/css" href="../font/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <center>
  <div class="contrib" style="width: 80%;border-radius: 15px;">
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal" style="text-align:left;color: black;">
        <i class="fa fa-user-circle" style="color:black;font-size: 25px;"></i>  Register . Skiyen
          </h4>
      </div>
      <div class="card-body">
        <form class="form-signin" autocomplete="off" name="form" id="form" method="POST" action="">
        <?php
if(isset($_GET)){
  if($_GET['replace']){
    ?>
    <center><div class="alert alert-danger">
      <?php echo $_GET['replace']; ?>
    </div></center>
    <?php
  } }
  ?>




    <label for="inputEmail" class="sr-only">Username</label><input type="text" class="form-control" id="name" placeholder="Username" autofocus name="uname"><label for="email" class="sr-only">Email</label><input type="email"  id="email" name="email" class="form-control" placeholder="Email"><label for="inputPassword" class="sr-only">Password</label><input type="password"  id="password" name="psw" onclick="readycap()" class="form-control" placeholder="Password"  style="margin-bottom: 0px;">
    <span class="reveal_password" onclick="reveal_password()" ><i id="eye" class="fa fa-eye" ></i></span>

    <br><label for="inputPassword" class="sr-only">Confirm Password</label><input type="password"  id="password1" onclick="readycap1()" name="confirmpsw" class="form-control" placeholder="Confirm Password" style="margin-bottom: 0px;"><label for="phn-no" class="sr-only">Phone Number</label><input type="text"  id="phn" name="phn-no" class="form-control" placeholder="Phone Number"><label for="phn-no" class="sr-only">Secret Code</label><input type="text"  id="scode" name="scode" minlength="10" class="form-control" placeholder="Secret Code" title="for reseting your password when you do not have access to your gmail or phone . 10 digits">

    <input type="radio" id="male" class="checkbox" value="Male" name="gender"><lable for="male">Male</lable>
     <input type="radio" id="female" class="checkbox" value="Female" name="gender"><label for="Female">Female</label><br>
     <button class="btn btn-lg btn-primary btn-block" name="reg" type="submit"><i class="fa fa-sign-in-alt" style="color: white;"></i> Sign Up</button><center>Already Have An Account? <a href="../">Sign In</a><br/></center><br><div id="error" style="color: red;"></div><div class="alert alert-success"><b>NOTE:</b><br><li>Use a valid email</li><li>Use short strong password that can be remembered by only <b>you</b></li></div></form>
      </div>
    </div>
  </div>
</center>