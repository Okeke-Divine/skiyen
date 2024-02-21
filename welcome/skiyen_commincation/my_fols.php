<span class="right pointer fa-1x kodkod" onclick="closea()">&times;</span>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for users..">

<ul id="myUL">
	<?php
	
		include("../../conn.php");
		session_start();
		include("../ses.php");
		$find_users = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id' || following = '$ses_id'");
		if(mysqli_num_rows($find_users) > 0){
			
			$all = array();
			
			while($row = mysqli_fetch_array($find_users)){
				$uid = $row['user_id'];
				$foll = $row['following'];
				$all[] = $uid;
				$all[] = $foll;
			}
			
			$all1 = array_unique($all);
			
			foreach($all1 as $alls){
				if($alls != $ses_id){
					$user_pro = mysqli_query($conn,"SELECT * FROM $user_table WHERE id = '$alls'");

				while($ur = mysqli_fetch_array($user_pro)){
					$uname = $ur['username'];
					$uid1 = $ur['id'];
					$gender = $ur['gender'];

					if($gender == "Male"){
						$newImg = $skiyen_boy;
					}
					else if($gender == "Female"){
						$newImg = $skiyen_girl;
					}

					$upp = $ur['profile_pic'];
					if($upp == ""){
						$pp1 = '<img src="../all_user_profile_pic/'.$newImg.'" alt="'.$uname.'" class="chat_btn_pic">';
					}else{
						$pp1 = '<img src="../all_user_profile_pic/'.$upp.'" alt="'.$uname.'" class="chat_btn_pic">';
					}
					echo "<li>
					
					<a href='javascript:void(0)' onclick='open_mess(".$uid1.")'>".$pp1." ".$uname."</a>
					</li>";
					}
					
				}
			}
		}else{
			?>
				<center>
					<br>
					Follow people to start a chat.
					
				</center>
			<?php
		}
	
	?>
</ul>
<style>
#myInput {
  background-image: url('/logo/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
</style>