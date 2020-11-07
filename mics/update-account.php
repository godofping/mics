<?php
include('connection.php');



	mysqli_query($connection, "update addaccounttable set FirstName = '" . $_POST['FirstName'] . "', MiddleName = '" . $_POST['MiddleName'] . "', LastName = '" . $_POST['LastName'] . "', Division = '" . $_POST['Division'] . "', ContactNumber = '" . $_POST['ContactNumber'] . "', OfficeLocation = '" . $_POST['OfficeLocation'] . "' where AddAccountId = '" . $_POST['AddAccountId'] . "'");

	if($_POST['from'] == 'profile')
	{
		header("Location: profile.php");	
	}

	if ($_POST['from'] == 'accountlist') {
		header("Location: add-edit-delete-accounts.php");
	}
	

 ?>