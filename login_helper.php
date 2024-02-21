<?php
if(isset($_COOKIE['skiyen_user'])){
  include("conn.php");
	$inosem = "dfogmosdkfgoskdfogksdofkgsdkfghsd9fgjsd9fjgw84t9j23jt83wjg8wefgjsd9fgvdsjfg9sdjfg9jsdfugjsdf9g9dfshg9sdfjgsd9fgs";

	$cookie_uname_value = $_COOKIE['skiyen_user'];
	
	if($cookie_uname_value == $inosem){

	}else{

	?>

<form class="card" onclick="window.location = 'welcome/';" style="position: relative;top:-25px;cursor: pointer;" action="process.php" method="POST">
  <div class="card-body p-6">
  <center>

            
       <div class="hrz2">
        <?php
          $query_for_profile = mysqli_query($conn,"SELECT * FROM $user_table WHERE username = '$cookie_uname_value'");
              while($row = mysqli_fetch_array($query_for_profile)){
                $user_pp = $row['profile_pic'];
                $user_gender = $row['gender'];
                
                if(empty($user_pp) && $user_gender == 'male'){
                  $user_pp = '_skiyen-boy.png';
                }else if(empty($user_pp) && $user_gender == 'female'){
                  $user_pp = '_skiyen-girl.png';
                }
        ?>
  	      <img src="welcome/all_user_profile_pic/<?php echo $user_pp; ?>" alt="<?php echo $u; ?>" class="png">
        <?php
          }
        ?>
       </div>


     <h3> <?php echo $cookie_uname_value; ?> </h3>

 </center>
  </div>
</form>
	<?php
}
}

?>
