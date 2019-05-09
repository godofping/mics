<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "delete from categorytable where CategoryId = '" . $_GET['CategoryId'] . "'");


header("Location: add-edit-delete-category.php");
 ?>