<?php
include('connection.php');



//mysqli_query($connection, "delete from addaccounttable where AddAccountId = '" . $_GET['AddAccountId'] . "'");

mysqli_query($connection, "UPDATE addaccounttable
SET active = 1, dateofdeactivate = NOW()
WHERE AddAccountId = '" . $_GET['AddAccountId'] . "'");





header("Location: add-edit-delete-accounts.php");
 ?>