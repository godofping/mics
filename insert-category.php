<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "insert into categorytable (NameOfCategory) values ('" . $_POST['NameOfCategory'] . "')");


header("Location: add-edit-delete-category.php");
 ?>