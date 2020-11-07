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
      <a class="white-text" href="view-entry.php?AddFormId=<?php echo $row['AddFormId'] ?>&SubCategoryId=<?php echo $SubCategoryId; ?>">
      <div class="card-panel teal darken-4">
         <h5>
          <?php echo $row['EntryDescription']; ?>
        </h5>
      </div>
      </a>
  </li>

<?php
}
?>

	</tr>

	<?php
	
	
}


?>
