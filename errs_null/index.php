<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php

include("404/index.php");

?>
<?php
include("../conn.php");
$time = date("h:i:sa");
$date = date("y/m/d");
$query1 = "INSERT INTO $views VALUES('','1','$ses_uname','$time','$date',UNIX_TIMESTAMP())";
$data1 = mysqli_query($conn,$query1);

?>