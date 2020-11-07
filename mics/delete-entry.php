<?php
include('connection.php');



mysqli_query($connection, "delete from addformtable where AddFormId = '" . $_GET['AddFormId'] . "'");
 

header("Location: menu.php?SubCategoryId=".$_GET["SubCategoryId"]);

  ?>
  