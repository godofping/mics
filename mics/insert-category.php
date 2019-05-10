<?php
include('connection.php');



mysqli_query($connection, "insert into categorytable (NameOfCategory, acivate) values ('" . $_POST['NameOfCategory'] . "', '" . 1 . "')");


header("Location: add-edit-delete-category.php");
 ?>