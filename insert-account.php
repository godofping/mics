<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");

$qry = mysqli_query($connection, "select * from addaccounttable where Username = '" . $_POST['Username'] . "'");

if(mysqli_num_rows($qry) > 0)
{
	echo "select * from addaccounttable where Username = '" . $_POST['Username'] . "'";
	header("Location: add-account.php?istaken=true");
}
else
{
	mysqli_query($connection, "insert into addaccounttable (FirstName, MiddleName, LastName, Division, ContactNumber, OfficeLocation, Username, Password, userlevel) values ('" . $_POST['FirstName'] . "', '" . $_POST['MiddleName'] . "', '" . $_POST['LastName'] . "', '" . $_POST['Division'] . "', '" . $_POST['ContactNumber'] . "', '" . $_POST['OfficeLocation'] . "', '" . $_POST['Username'] . "', '" . $_POST['Password'] . "', '" . 2 . "')");

	header("Location: add-account.php?success=true");


}


 ?>