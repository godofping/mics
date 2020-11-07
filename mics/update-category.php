<?php
include('connection.php');



mysqli_query($connection, "update categorytable set NameOfCategory = '" . $_POST['NameOfCategory'] . "' where CategoryId = '" . $_POST['CategoryId'] . "'");


header("Location: add-edit-delete-category.php");
 ?>