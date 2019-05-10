<?php
include('connection.php');



mysqli_query($connection, "insert into subcategorytable (NameOfSubCategory,CategoryId) values ('" . $_POST['NameOfSubCategory'] . "', '" . $_POST['CategoryId'] . "')");


header("Location: add-edit-delete-subcategory.php?CategoryId=".$_POST['CategoryId']);
 ?>