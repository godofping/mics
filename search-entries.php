<?php
include('connection.php');

$search = mysqli_real_escape_string($connection,htmlentities(trim($_POST['searchterm'])));
$SubCategoryId = mysqli_real_escape_string($connection,htmlentities(trim($_POST['SubCategoryId'])));




$find_search = mysqli_query($connection, "select * from addformtable where SubCategoryID = '" . $SubCategoryId . "' and (EntryDescription like '%$search%')");





if (mysqli_num_rows($find_search) == 0 and !empty($search)) {
  ?>

                   <!--alert-icons-->
                
                  
               
               <li class="collection-header">                                
      <b><p>No results :(</p></b>
  </li>
            
  </div>

  <?php
}
else
{



while($row = mysqli_fetch_assoc($find_search))
{
	?>
	
	<li class="collection-header">                                
      <p><a href="view-entry.php?AddFormId=<?php echo $row['AddFormId'] ?>&SubCategoryId=<?php echo $SubCategoryId; ?>">View | <?php echo $row['EntryDescription']; ?></a></p>
  </li>

<?php
}
?>

	</tr>

	<?php
	
	
}


?>
