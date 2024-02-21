 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-voicemail icon-gradient bg-arielle-smile">
                                        </i>
                                    </div>
                                    <div>
                                        Users on Skiyen
                                        <div class="page-title-subheading">
                                           Welcome to the admin home page for skiyen.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <style type="text/css">
    .main_img{
        border-radius: 50%;
        height: 100px;
        width: 100px;
    }
    .img{
        text-align: center;
    }
</style>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
<body>
<?php
$wu = "SELECT * FROM $user_table";
$da = mysqli_query($conn,$wu);

if(mysqli_fetch_assoc($da)){
?>
<div class="">
    <span id="search_result_number"></span> user found
</div><br>
<?php

$all_ids = 0;

$query = "SELECT * FROM $user_table WHERE username != '' ORDER BY id DESC";
$data = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $pswlen = strlen($row['password']);
    $uname = $row['username'];
    $email = $row['email'];
    $gen = $row['gender'];
    $pp = $row['profile_pic'];
    $views = $row['views'];
     $all_ids += 1;
  echo "<script>
  document.getElementById('search_result_number').innerHTML = '$all_ids';
  </script>";

  ?>

<div class="bg-light p-3">
    <div class="img">
        <?php 

        if($pp != ""){
            echo "<a href='../../welcome/all_user_profile_pic/$pp'><img class='main_img' src='../../welcome/all_user_profile_pic/$pp' alt='deleted pp give use notice'></a>";
        }else{
            echo "no profile picture";
        }

        ?>

    </div>
    <?php echo $id; ?><br>
    <?php echo $uname; ?><br>
    <?php echo "password lenght is ".$pswlen; ?><br>
    <?php echo $email; ?><br>
    <?php echo $gen; ?><br>
    <?php echo $views; ?> views<br>
    <br>
</div>
<br>
  <?php
}

?>
<?php
}else{
?>
<div class="bg-light def">
    No user has registered
</div>
<?php
}


?>

</body>


                    </div>

                </div>
