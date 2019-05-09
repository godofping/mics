<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



	mysqli_query($connection, "update addaccounttable set FirstName = '" . $_POST['FirstName'] . "', MiddleName = '" . $_POST['MiddleName'] . "', LastName = '" . $_POST['LastName'] . "', Division = '" . $_POST['Division'] . "', ContactNumber = '" . $_POST['ContactNumber'] . "', OfficeLocation = '" . $_POST['OfficeLocation'] . "' where AddAccountId = '" . $_POST['AddAccountId'] . "'");

	if($_POST['from'] == 'profile')
	{
		header("Location: profile.php");	
	}

	if ($_POST['from'] == 'accountlist') {
		header("Location: add-edit-delete-accounts.php");
	}
	

 ?>