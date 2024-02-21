<?php
					
					if($item != ""){
					$search_userx = "SELECT * FROM $user_table WHERE username LIKE '%$item%'";
					$ee = mysqli_query($conn,$search_userx);
if(mysqli_fetch_assoc($ee)){
?>
<div id="user"></div><?php 
$search_user = "SELECT * FROM $user_table WHERE username LIKE '%$item%'";
$user_post = mysqli_query($conn,$search_user);
	while($user_row = mysqli_fetch_array($user_post)){
		$profile_pic = $user_row['profile_pic'];
		$skiyen_username = $user_row['username']; 
		$id = $user_row['id'];
		$insert_searches = mysqli_query($conn,"INSERT INTO $some_searches VALUES('','$ses_uname','user','$id','$item','0',UNIX_TIMESTAMP())");
		?>
<div class="user_pro">
	<span class="pic">
		<?php
			if($profile_pic != ""){
				echo "<a href='../all_user_profile_pic/$profile_pic?user=$username'><img alt='could not be loaded' src='../all_user_profile_pic/$profile_pic' style='border-radius:50%;height:30px;width:30px;;'></a>";
			}else{
				echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 20px;'></i>";
			}
		?>
	</span>
<span class="uname"><?php echo $skiyen_username; ?></span><span class="right"><a href="../profile/?view=<?php echo $skiyen_username; ?>" class="btn btn_ses opacity_som"><i class="fa fa-plus-circle" style="color: inherit;"></i> View Profile</a></span></div><style type="text/css">.never{display: none;}</style><?php
}
?>
<?php
					}else{
					?>

<div class="glon">No user found for <?php echo $item; ?></div>


					<?php
					}
				}
					?>
					<div id="group_csv"></div>
<?php
include("../../conn.php");
$item = $_GET['zqq'];
 $search_group = "SELECT * FROM $groups WHERE name LIKE '%$item%' && security != 'private'";
$ff = mysqli_query($conn,$search_group);
?>      
<?php
if(mysqli_fetch_assoc($ff)){
	 $search_groupp = "SELECT * FROM $groups WHERE name LIKE '%$item%'";
	$fff = mysqli_query($conn,$search_groupp);
	?>          
    
    <?php
	while($group_row = mysqli_fetch_array($fff)){
		$gname = $group_row['name'];$privacy = $group_row['security'];
		$id = $group_row['id'];
		$insert_searches1 = mysqli_query($conn,"INSERT INTO $some_searches VALUES('','$ses_uname','group','$id','$item','0',UNIX_TIMESTAMP())");

		?>
		<div class="user_pro"><span class="uname"><?php echo $gname; ?></span><span class="right"><a href="../group/?num=idsfjisodjgsdiofgj9weorgj98whgnriuognsd9ghnw2935hnyw9gnw9gijwer9gjw9eigjmwe9rgijwe9rigjwe9rigjwer98gjwer9gjwe9rgjwe9r8gjwe9rigjwer9iogmweriogmweroigjwmeriogwmeroigwemrgoiwergj9weriogjwmeo&&into=<?php echo $gname; ?>&&num_squae=idsfhidfskljghsdiufgnsdifugkjsndifgkjsndfiukgjsdnfgkjsdfngkjsdfngskjdfhgnsiuodfhgnsuijrnsuiejhngiekrjgnsujgnsdijgnesigkjnseirgkjnekjgnsekjrgnskejrgnskjegnsekj7&&end=idsfjisodjgsdiofgj9weorgj98whgnriuognsd9ghnw2935hnyw9gnw9gijwer9gjw9eigjmwe9rgijwe9rigjwe9rigjwer98gjwer9gjwe9rgjwe9r8gjwe9rigjwer9iogmweriogmweroigjwmeriogwmeroigwemrgoiwergj9weriogjwmeo" class="btn btn_ses"><i class="fa fa-plus-square" style="color: inherit;"></i> Join Group</a></span></div>
		<?php } ?>	
                    
<?php
}
else{
		?>
		<div class="glon">No group found for <?php echo $item; ?></div>
		<?php
			}
		?>
	<?php 


	?>
