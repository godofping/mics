
<?php
include('connection.php');

$search = mysqli_real_escape_string($connection,htmlentities(trim($_POST['searchterm'])));
$CategoryId = mysqli_real_escape_string($connection,htmlentities(trim($_POST['CategoryId'])));


$find_search = mysqli_query($connection, "select * from view_subcategory where CategoryId = '" . $CategoryId . "' AND activate = 1 and NameOfSubCategory like '%$search%'");

if (mysqli_num_rows($find_search) == 0) { ?>

<!--alert-icons-->
<div style="padding-top: 40px;">
                  
  <b><p>No results :(</p></b>

</div>
              
<?php } else { ?>

<table class="striped">
    <thead>
      <tr>
         <th data-field="NameOfSubCategory">Sub-Category Name</th>
         <th data-field="Action">Action</th>
        
      </tr>
    </thead>

    <tbody>
  <?php
  while($row = mysqli_fetch_assoc($find_search))
{
  ?>

   <tr>
      <td><?php echo $row['NameOfSubCategory']; ?></td>
      <td>
        <a href="edit-subcategory.php?CategoryId=<?php echo $row['CategoryId'] ?>&SubCategoryId=<?php echo $row['SubCategoryId']; ?>" class="btn waves-effect waves-light indigo">Edit</a> 

        <br><br>

        <a href="delete-subcategory.php?CategoryId=<?php echo $row['CategoryId'] ?>&SubCategoryId=<?php echo $row['SubCategoryId'] ?>" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn waves-effect waves-light red">Delete</a>
      </td>
    </tr>

     
  <?php } ?>

  </tbody>
</table>

<?php } ?>
