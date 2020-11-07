<?php
include('connection.php');

$qry = mysqli_query($connection, "select * from addaccounttable where username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "' and userlevel = 1 and active = 1 ");
if(mysqli_num_rows($qry) > 0)
{
	$result = mysqli_fetch_assoc($qry);
	$_SESSION["AddAccountId"] = $result['AddAccountId'];
	$_SESSION["userlevel"] = 1;
	header("Location: main.php");
}
else
{
	$qry = mysqli_query($connection, "select * from addaccounttable where username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "' and userlevel = 2 and active = 1");
	if(mysqli_num_rows($qry) > 0)
		{
			$result = mysqli_fetch_assoc($qry);
			$_SESSION["AddAccountId"] = $result['AddAccountId'];
			$_SESSION["userlevel"] = 2;
			header("Location: main.php");

		}
		else
		{
			 header("Location: index.php?wrong=true");
		}


}






 ?>