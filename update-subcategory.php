<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "update subcategorytable set NameOfSubCategory = '" . $_POST['NameOfSubCategory'] . "' where SubCategoryId = '" . $_POST['SubCategoryId'] . "'");

header("Location: add-edit-delete-subcategory.php?CategoryId=".$_POST['CategoryId']);
 ?>