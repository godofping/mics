<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "update categorytable set NameOfCategory = '" . $_POST['NameOfCategory'] . "' where CategoryId = '" . $_POST['CategoryId'] . "'");


header("Location: add-edit-delete-category.php");
 ?>