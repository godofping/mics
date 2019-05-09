<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "update addaccounttable set Password = '" . $_POST['Password'] . "' where AddAccountId = '" . $_POST['AddAccountId'] . "'");

if ($_POST['from'] == 'editaccount') {

	header("Location: add-edit-delete-accounts.php");
}
if($_POST['from'] == 'profile')
	{

		header("Location: profile.php");
}

 ?>
