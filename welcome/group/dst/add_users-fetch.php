<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../../font/css/all.css">
<?php

	if(isset($_REQUEST['zqq'])){
		$zqq = $_REQUEST['zqq'];
		$null = $_REQUEST['null'];
		if(!empty($zqq)){
			session_start();
			include("../../ses.php");
			include("../../ver.php");
			include("../../../conn.php");
			$query_users = mysqli_query($conn,"SELECT * FROM $user_table WHERE username like '%$zqq%'");
			if(mysqli_fetch_array($query_users)){
			$query_users = mysqli_query($conn,"SELECT * FROM $user_table WHERE username like '%$zqq%'");
		while($row_user = mysqli_fetch_array($query_users)){
			$my_uname = $row_user['username'];
			$my_id = $row_user['id'];
			$my_pp = $row_user['profile_pic'];

			?>

			<div class="view_box">
			<div class="alert alert-secondary">
				<?php

				if(!empty($my_pp)){
					?>

              <img src="../../all_user_profile_pic/<?php echo $my_pp; ?>" alt="<?php echo $my_uname; ?>" class="home_img" style="width: 40px;height: 40px;position: relative;margin-right: 5px;">


					<?php
				}else{
					 $rand = rand(1,3);
        if($rand == 1){
          $sent_col = "#007bff";
        }else if($rand == 2){
         $sent_col = "grey";
        }
        else if($rand == 3){
         $sent_col = "green";
        }
        else{
         $sent_col = "#007bff";
        }
					include("../../nup.php");
				}

				?>
				<?php echo $my_uname; ?>
			</div>
			<div class="btn_area">
				<?php

				$search_group = mysqli_query($conn,"SELECT * FROM $joined_groups WHERE gname = '{$null}' and user = '{$my_uname}'");

				if(mysqli_fetch_assoc($search_group)){
					?>
					<button class="btn btn"><i class="fa fa-user-friends" style="color: grey;"></i></button>
					<?php
				}else{
					?>
					<button class="btn btn" onclick="add_user('<?php echo $my_uname; ?>','<?php echo $my_id; ?>')"><i class="fa fa-plus-circle" style="color: grey;"></i></button>
					<?php
				}


				?>
			</div>
			</div>



			<?php
		}
	}else{
		echo "No user found for &nbsp; <b>".$zqq."</b>";
		}
	}
	}

?>