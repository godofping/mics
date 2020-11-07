<?php
include('connection.php');



mysqli_query($connection, "update addaccounttable set Password = '" . $_POST['Password'] . "' where AddAccountId = '" . $_POST['AddAccountId'] . "'");

if ($_POST['from'] == 'editaccount') {

	header("Location: add-edit-delete-accounts.php");
}
if($_POST['from'] == 'profile')
	{

		header("Location: profile.php");
}

 ?>
