<?php
include('connection.php');

$search = mysqli_real_escape_string($connection,htmlentities(trim($_POST['searchterm'])));

$find_search = mysqli_query($connection, "select * from addaccounttable where userlevel = 2  AND (FirstName like '%$search%' or MiddleName like '%$search%' or LastName like '%$search%' or Username like '%$search%')");

if (mysqli_num_rows($find_search) == 0) { ?>

               
  <div style="padding-top: 40px;">
                  
  <b><p>No results :(</p></b>
  
  </div>

<?php } else { ?>

  <table class="striped">
    <thead>
        <tr>
          <th data-field="Full Name">Full Name</th>
          <th data-field="Contact Number">Contact Number</th>
          <th data-field="Username">Username</th>
          <th data-field="Action">Action</th>
        
        </tr>
    </thead>

    <tbody>

    <?php while($row = mysqli_fetch_assoc($find_search)) { ?>
    	<tr>
      	<td><?php echo $row['FirstName']." ".$row['MiddleName']." ".$row['LastName']; ?></td>
      	<td><?php echo $row['ContactNumber'] ?></td>
      	<td><?php echo $row['Username'] ?></td>

      	<?php if ($row["active"] == 1) {?>
        <td>
          <a href="edit-account.php?AddAccountId=<?php echo $row['AddAccountId'] ?>&from=accountlist" class="btn waves-effect waves-light indigo">Edit</a> 

          <br><br>

          <a href="change-password.php?AddAccountId=<?php echo $row['AddAccountId'] ?>&from=editaccount" class="btn waves-effect waves-light cyan">Change Password</a> 

          <br><br>

          <a href="delete-account.php?AddAccountId=<?php echo $row['AddAccountId']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn waves-effect waves-light red">Delete</a>
        </td>
        <?php } else { ?>
        <td>
          <a href="edit-account.php?AddAccountId=<?php echo $row['AddAccountId'] ?>&from=accountlist" class="btn waves-effect waves-light indigo" >Edit</a> 

          <br><br>

          <a href="change-password.php?AddAccountId=<?php echo $row['AddAccountId'] ?>&from=editaccount" class="btn waves-effect waves-light cyan">Change Password</a> 

          <br><br>

          <a href="activate-account.php?AddAccountId=<?php echo $row['AddAccountId']; ?>" onclick="return confirm('Are you sure you want to activate this item?');" class="btn waves-effect waves-light yellow">activate</a>
        </td>
        <?php } ?>
	   </tr>

    <?php } ?>

    </tbody>
  </table>

<?php } ?>
