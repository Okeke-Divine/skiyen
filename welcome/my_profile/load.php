
<div>
		<?php

		include("../../conn.php");

			$my_profile = $ses_uname;
			$query = "SELECT * FROM $user_table WHERE username = '$ses_uname' LIMIT 0,1";
			echo "<span class='pae'>";
			$data = mysqli_query($conn,$query);

			if($data){

				while($row = mysqli_fetch_array($data)){
					echo "</span>";
					$my_uname = $row['username']; 
					$my_gender = $row['gender']; 
					$my_profile_pic = $row['profile_pic'];
					$my_email = $row['email']; 
					
					?>
					<center>
					<div class="glon" style="width: 90%;text-align: left;">
						<br>
						<br>
						<center>
							<?php
							if($my_profile_pic != ""){
								echo "<a href='../all_user_profile_pic/$my_profile_pic?user=$ses_uname'><img alt='picture does not exit' src='../all_user_profile_pic/$my_profile_pic' style='border-radius:50%;height:100px;width:100px;'></a>";
							}else{
								echo "<i class='fa fa-user-circle' style='color: inherit;font-size: 100px;'></i>";
							}
							?>
							<br>
							<div>
						<span class="profile_text"><?php echo $my_uname; ?><br></span>
						<span class="profile_text"><a href="https://mailto:<?php echo $my_email; ?>" class="pos_link" target="_blank"><?php echo $my_email; ?></a><br></span>
						<span class="profile_text"><?php echo $my_gender; ?><br></span>
					</div>
						</center>
						<br>
						<br>
					</div>
				</center>
					<?php
			}
		}else{
			include("../../profile_error.php");
		}

		?>
		<center>
	<div class="glon" style="width: 90%;text-align: left;">
	<h3>Accessbility</h3>
		<i class="fa fa-circle" style="color: inherit;"></i> <button class="point access_btn" onclick="post()">Post</button><br>
	</div>
	</div>
</center>
	
	<br>
	<br>
	<br>
	<?php $pos = $ses_uname; $qwert = "SELECT * FROM $user_post WHERE username = '$pos'"; echo "<span class='pae'>"; $data = mysqli_query($conn,$qwert); while($row = mysqli_fetch_array($data)){echo "</span>";$u = $row['username'];$pos = $row['post'];$id=$row['id']; $time = $row['time']; $date = $row['date'];
	$id = $row['id'];
		$uname = $row['username'];
		$post = $row['post'];
		$time = $row['time'];
		$post_num = strlen($post);
		$date = $row['date'];
		$td = $time." - ".$date;

		echo "<center>
		<div>
		<div class='whole_post' id='$id'>
		<div class='topper'>
			<span class='name'><a class='post_link' href='../profile?view=$uname'><i class='fa fa-user-circle' style='color:white;'></i>  $uname</a></span><span class='time'>$td</span>
		</div>
		<div class='main_post'>
		<textarea readonly class='post_text'>$post</textarea>
		</div>
		</div>
		<form style='width:90%;text-align:left;' action='sdlkjgsdklhiasudhiu87yh9onfmsuafynx8qweixm8woqirxmj9opeaxkfdixfsdnhdfioxjads9pfx8unasd98fxoiasdjjofxidsnifoshdnfxoiadshfnxoiasdhfxoiweuxnasoijxaspodf.php' method='POST'>
			<input type='hidden' name='content' value='$pos'><input type='hidden' name='id' value='$id'><button class='btn point edit' name='edit'>Edit</button> <button class='btn point delete' name='delete'>Delete</button></form></div>
</div></div><br><br>
		</div>
		</center>";
}
?>