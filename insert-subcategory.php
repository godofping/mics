<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "insert into subcategorytable (NameOfSubCategory,CategoryId) values ('" . $_POST['NameOfSubCategory'] . "', '" . $_POST['CategoryId'] . "')");


header("Location: add-edit-delete-subcategory.php?CategoryId=".$_POST['CategoryId']);
 ?>