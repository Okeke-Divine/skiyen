 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-voicemail icon-gradient bg-arielle-smile">
                                        </i>
                                    </div>
                                    <div>Reply Contact us message
                                        <div class="page-title-subheading">
                                           Contact us
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../font/css/all.css">
<body>
<?php

if(isset($_POST['reply_to_id'],$_POST['reply'])){
include("../../conn.php");
    $cuid = $_POST['reply_to_id'];  
    $rep = $_POST['reply'];
    $qwe = "INSERT INTO $rcu VALUES('','$cuid','$rep',UNIX_TIMESTAMP())";
    if(mysqli_query($conn,$qwe)){
        echo "sent";
    }else{
        echo "no sent...";
    }
}

include("../../conn.php");
$wu = "SELECT * FROM $contact_us";
$da = mysqli_query($conn,$wu);


if(mysqli_fetch_assoc($da)){
?>
<div class="">
    <span id="search_result_number"></span> results found
</div><br>
<?php

$all_ids = 0;

$query = "SELECT * FROM $contact_us WHERE message != '' ORDER BY id DESC";
$data = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($data)){
    $id = $row['id'];
    $uname = $row['username'];
    $message = $row['message'];
    $rate = $row['rate'];
    $date = $row['date'];
    $time = $row['time'];
     $all_ids += 1;
  echo "<script>
  document.getElementById('search_result_number').innerHTML = '$all_ids';
  </script>";

  ?>

<div class="bg-light def">
    <?php echo $id." - ".$uname." - ".$rate."star(s)"; ?><br>
    <?php echo $message; ?><br>
    <?php echo $date." - ".$time; ?><br>


    <?php

    $we = "SELECT * FROM $rcu WHERE contact_us_id = '$id'";
    $d = mysqli_query($conn,$we);

    if(mysqli_fetch_assoc($d)){
        $wee = "SELECT * FROM $rcu WHERE contact_us_id = '$id'";
        $dd = mysqli_query($conn,$wee);

        while($row = mysqli_fetch_array($dd)){
            $reply = $row['reply'];
            echo "You replied: ".$reply."<br>";
        }

    }else{
        echo "You have not replied!";
    }

    ?>

    <form method="POST">
        <input type="text" name="reply_to_id" readonly class="form-control" value="<?php echo $id; ?>">
        <input type="text" name="reply" class="form-control" placeholder="reply...">
        <button class="btn btn-primary">Send</button>
    </form>
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
    No user has contacted us.
</div>
<?php
}


?>
</body>


                        </div>
                    </div>
                </div>
