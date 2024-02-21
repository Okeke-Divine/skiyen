<?php

$server_name = "localhost";
$server_username = "root";
$server_password = "";
$server_dbname = "skiyen";
$gname_server = "skiyen_group_chat";
$base_domain = "http://127.0.0.1";
$conn = new mysqli($server_name,$server_username,$server_password,$server_dbname);

$group_connection_server = new mysqli($server_name,$server_username,$server_password,$gname_server);
include("conn_helper.php");

//08150374285
//8150374285



?>