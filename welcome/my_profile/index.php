<?php
session_start();
include("../../conn.php");
include("../ses.php");
include("../ver.php");
  header("location:../profile/?view=$ses_uname");

?>