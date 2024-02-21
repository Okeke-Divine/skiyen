<?php

	session_start();
  include("../../../conn.php");
  include("../../ses.php");
  include("../../ver.php");

if(isset($_REQUEST['tdi'])){
	$tdi = $_REQUEST['tdi'];
	$id = $ses_id;
  
  $query = mysqli_query($conn,"INSERT INTO $todo_list (
`id` ,
`user_id` ,
`todo` ,
`done` ,
`time`
)
VALUES (
NULL , '$id', '$tdi', '0', UNIX_TIMESTAMP()
);
");

}

?>