<?php
include('connection.php');



//mysqli_query($connection, "delete from subcategorytable where SubCategoryId = '" . $_GET['SubCategoryId'] . "'");

mysqli_query($connection, "UPDATE subcategorytable
SET activate = 0, datedisactivate = NOW()
WHERE SubCategoryId = '" . $_GET['SubCategoryId'] . "'");


header("Location: add-edit-delete-subcategory.php?CategoryId=".$_GET['CategoryId']."&success=true");
 ?>