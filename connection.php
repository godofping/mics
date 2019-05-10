<?php 
session_start();
date_default_timezone_set('Asia/Manila');
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection, "micsdb");

?>