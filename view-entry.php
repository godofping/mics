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

                <?php $qry2 = mysqli_query($connection,"select * from subcategorytable where SubCategoryId = '" . $_GET['SubCategoryId'] . "'"); 
                $result2 = mysqli_fetch_assoc($qry2);

                $qry3 = mysqli_query($connection,"select * from view_entry where AddFormId = '" . $_GET['AddFormId'] . "'"); 
                $result3 = mysqli_fetch_assoc($qry3);
                ?>
                
                <div class="container">
                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">

                            <div class="col s12 m12 20">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header purple">
                                        <h4 class="task-card-title"><?php echo $result2['NameOfSubCategory'] ?></h4>
                                        
                                    </li>
                                 

                                  
                                      <li class="collection-header">
                                        
                                        <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 12">
                  
                   
                    <div class="row">
                      <div style="text-align: center;height: ">
                          <img class="materialboxed responsive-img" width="550" src="<?php echo $result3['ImagePath'] ?>">
                      </div>
                    </div>

                                <ul id="task-card" class="collection with-header">
                                  
                                

                                 
                                      <li class="collection-header">
                                        <h5 style="color: black" class="task-card-title">Entry Title: <?php echo $result3['EntryTitle'] ?></h5>
                                      </li>


                                      <li class="collection-header">
                                        <h5 style="color: black" class="task-card-title">Entry Description: <?php echo $result3['EntryDescription'] ?></h5>
                                      </li>


                                      <li class="collection-header">
                                        <h5 style="color: black" class="task-card-title">Resolution / Process Steps: <?php echo $result3['Resolution'] ?></h5>
                                      </li>

                              
                                    

                                      <li class="collection-header">
                                           
                                        
                                       
              
                <!--Flat Buttton-->
                <div id="flat-button" class="section">
                  <div class="row">
                    
                    
                    
                     
                    <div style="text-align: right;"><?php if ($_SESSION["userlevel"] == 1) { ?>
                        <a href="delete-entry.php?AddFormId=<?php echo $_GET['AddFormId']; ?>&SubCategoryId=<?php echo $_GET['SubCategoryId'] ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn waves-effect waves-light red">Delete Entry</a>
                        <br><br>
                      <?php } ?>

                         <a href="edit-entry.php?AddFormId=<?php echo $_GET['AddFormId']; ?>&SubCategoryId=<?php echo $_GET['SubCategoryId'] ?>" class="btn waves-effect waves-light indigo">Edit Entry</a>

                        <br><br>

                      <a href="view-history.php?AddFormId=<?php echo $_GET['AddFormId']; ?>&SubCategoryId=<?php echo $_GET['SubCategoryId'] ?>" class="btn waves-effect waves-light teal">View History</a>
                     
                 
                    </div>
                </div>
                                     
                                    
                                    
                                </ul>
                           
                



                    </div>
                    

                  </div>
                </div>  


                                        
                                       
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
    
</body>

</html>