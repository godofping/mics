<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");



mysqli_query($connection, "delete from addformtable where AddFormId = '" . $_GET['AddFormId'] . "'");


header("Location: menu.php?SubCategoryId=".$_GET["SubCategoryId"]);
 ?>