<?php 
include('connection.php');

$getUserQry = mysqli_query($connection, "select * from addaccounttable where AddAccountId = '" . $_SESSION["AddAccountId"] . "'");
$getUserRes = mysqli_fetch_assoc($getUserQry);

 ?>
<!DOCTYPE html>
<html lang="en">



<?php include('head.php'); ?>

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <?php include('side-menu.php'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->


            <!-- START CONTENT -->
            <section id="content">

               
                
                <div class="container">
                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">

                            <div class="col s12 m12 20">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header purple">
                                        <h4 class="task-card-title">Accounts</h4>
                                        
                                    </li>
                                 

                                  
                                      <li class="collection-header">
                                        
                                        <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 12">
                  
           

                    <?php
                     if (isset($_GET['success'])) { ?>
                    <div class="card-panel teal white-text">
                       <i class="mdi-navigation-check icon"></i> <strong>Success!</strong> Account updated
                    </div>
                    <?php }

                    $qry2 = mysqli_query($connection, "select * from addaccounttable where AddAccountId = '" . $_GET['AddAccountId'] . "'");

                    
                    $result2 = mysqli_fetch_assoc($qry2);


                     ?>
                   

                    <h4 class="header">Edit Account</h4>
                    <div class="row">
                      <form method="POST" action="update-account.php" class="col s12">

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="FirstName" name="FirstName" value="<?php echo $result2['FirstName'] ?>"  type="text">
                            <label for="FirstName">First Name</label>
                          </div>
                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="MiddleName" name="MiddleName" value="<?php echo $result2['MiddleName'] ?>" type="text">
                            <label for="MiddleName">Middle Name</label>
                          </div>
                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="LastName" name="LastName" value="<?php echo $result2['LastName'] ?>" type="text">
                            <label for="LastName">Last Name</label>
                          </div>
                     </div>

                     <div class="row">
                         <div class="input-field col s12">
                            <select name="Division">
                             <option  selected="" value="<?php echo $result2['Division'] ?>"><?php echo $result2['Division'] ?></option>
                              <option value="Division 1">Division 1</option>
                              <option value="Division 2">Division 2</option>
                              <option value="Division 3">Division 3</option>
                            </select>
                          </div>

                     </div>

                     <div class="row">
                         <div class="input-field col s12">
                          
                            <select name="OfficeLocation">
                             <option selected="" value="<?php echo $result2['OfficeLocation'] ?>"><?php echo $result2['OfficeLocation'] ?></option>
                              <option value="1st Floor">1st Floor</option>
                              <option value="2nd Floor">2nd Floor</option>
                              <option value="3rd Floor">3rd Floor</option>
                              <option value="4th Floor">4th Floor</option>
                              <option value="5th Floor">5th Floor</option>
                              <option value="6th Floor">6th Floor</option>
                            </select>
                          </div>

                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="ContactNumber" name="ContactNumber" value="<?php echo $result2['ContactNumber'] ?>" maxlength="11" type="text">
                            <label for="ContactNumber">Contact Number</label>
                          </div>
                     </div>




                     <input type="text" name="from" value="<?php echo $_GET['from']; ?>" hidden="">
                     <input type="text" name="AddAccountId" value="<?php echo $_GET['AddAccountId']; ?>" hidden="">
        
                       
                     
                    </div>
                  </div>
                </div>  

                <div class="row">
                            <div class="input-field col s12">
                    
                                <div style="text-align: right;">
                                   <button type="submit" class="btn waves-effect waves-light green">save</button>
                                </div>

                               
                            </div>
                          </div>


                           </form>
                                        
                                       
                                      </li>

                        
                                </ul>
                            </div>

                        
                            

                        </div>
                    </div>
                    <!--card widgets end-->


                </div>




                <!--end container-->
            </section>
            <!-- END CONTENT -->

       

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
          
        }, 3000);
        setTimeout(function() {
           
        }, 5500);
        setTimeout(function() {
           
        }, 18000);
    });
    
    </script>
</body>

</html>