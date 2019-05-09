<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "delete from addaccounttable where AddAccountId = '" . $_GET['AddAccountId'] . "'");


header("Location: add-edit-delete-accounts.php");
 ?>