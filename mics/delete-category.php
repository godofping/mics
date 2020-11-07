<?php
include('connection.php');



//mysqli_query($connection, "delete from categorytable where CategoryId = '" . $_GET['CategoryId'] . "'");
mysqli_query($connection, "UPDATE categorytable
SET acivate = 0, dateofdisactivate = NOW()
WHERE CategoryId = '" . $_GET['CategoryId'] . "'");

header("Location: add-edit-delete-category.php?success=true");
 ?>