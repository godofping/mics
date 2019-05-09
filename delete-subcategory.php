<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "delete from subcategorytable where SubCategoryId = '" . $_GET['SubCategoryId'] . "'");


header("Location: add-edit-delete-subcategory.php?CategoryId=".$_GET['CategoryId']);
 ?>