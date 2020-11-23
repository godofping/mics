<?php
include('connection.php');


$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

if ($uploadfile == 'uploads/') {
	$uploadfile = 'uploads/no-photo.jpg';
}


mysqli_query($connection, "insert into addformtable (ImagePath, EntryTitle, EntryDescription, Resolution, DateOfEntry, Author, SubCategoryId) values ('" . $uploadfile .  "', '" . $_POST['EntryTitle'] . "', '" . $_POST['EntryDescription'] . "', '" . $_POST['Resolution'] . "', '" . date('Y-m-d') . "', '" . $_SESSION["AddAccountId"] . "', '" . $_POST["SubCategoryId"] . "')");



header("Location: menu.php?SubCategoryId=".$_POST["SubCategoryId"]);
 ?>