<?php
include('connection.php');

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}


if($uploadfile == 'uploads/')
{
	mysqli_query($connection, "update addformtable set EntryTitle = '" . $_POST['EntryTitle'] . "',EntryDescription = '" . $_POST['EntryDescription'] . "',Resolution = '" . $_POST['Resolution'] . "',Author = '" . $_SESSION['AddAccountId'] . "',DateOfEntry = '" . date('Y-m-d') . "' where AddFormId = '" . $_POST['AddFormId'] . "' ");

	mysqli_query($connection, "insert into editformtable (ImagePath,EntryTitle, EntryDescription, Resolution, DateOfEdit, Author, EditDescription, AddFormId) values ('" . $_POST['ImagePath'] . "', '" . $_POST['EntryTitle'] . "', '" . $_POST['EntryDescription'] . "', '" . $_POST['Resolution'] . "', '" . date('Y-m-d') . "', '" . $_SESSION["AddAccountId"] . "', '" . $_POST['EditDescription'] . "', '" . $_POST['AddFormId'] . "')");

}
else
{
	mysqli_query($connection, "update addformtable set EntryTitle = '" . $_POST['EntryTitle'] . "',EntryDescription = '" . $_POST['EntryDescription'] . "',Resolution = '" . $_POST['Resolution'] . "',Author = '" . $_SESSION['AddAccountId'] . "',DateOfEntry = '" . date('Y-m-d') . "',ImagePath = '" . 'uploads/'.$_FILES['userfile']['name'] . "' where AddFormId = '" . $_POST['AddFormId'] . "' ");

	mysqli_query($connection, "insert into editformtable (ImagePath,EntryTitle, EntryDescription, Resolution, DateOfEdit, Author, EditDescription, AddFormId) values ('" . 'uploads/'.$_FILES['userfile']['name'] . "', '" . $_POST['EntryTitle'] . "', '" . $_POST['EntryDescription'] . "', '" . $_POST['Resolution'] . "', '" . date('Y-m-d') . "', '" . $_SESSION["AddAccountId"] . "', '" . $_POST['EditDescription'] . "', '" . $_POST['AddFormId'] . "')");


}




 header("Location: view-entry.php?AddFormId=".$_POST["AddFormId"]."&SubCategoryId=".$_POST['SubCategoryId']);
 ?>