<?php
session_start();
$connection = mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($connection, "micsdb");


$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}

if ($uploadfile == 'uploads/') {
	$uploadfile = 'uploads/no-photo.jpg';

}


mysqli_query($connection, "insert into addformtable (ImagePath, EntryTitle, EntryDescription, Resolution, DateOfEntry, Author, SubCategoryId) values ('" . $uploadfile .  "', '" . $_POST['EntryTitle'] . "', '" . $_POST['EntryDescription'] . "', '" . $_POST['Resolution'] . "', '" . date('Y-m-d') . "', '" . $_SESSION["AddAccountId"] . "', '" . $_POST["SubCategoryId"] . "')");



header("Location: menu.php?SubCategoryId=".$_POST["SubCategoryId"]);
 ?>