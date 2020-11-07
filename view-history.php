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

                $qry3 = mysqli_query($connection,"select * from view_edit_history where AddFormId = '" . $_GET['AddFormId'] . "'"); 
               
                
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
                  
                    <h4 class="header">Edit History</h4>
                    <div class="row">
                         <!--Borderless Table-->
            <div id="borderless-table">
             
              <div class="row">
                <div class="container">
                <div class="col s12 m12 20">
                  <table>
                    <thead>
                      <tr>
                        <th data-field="id">Date Edited</th>
                        <th data-field="name">Edited Description</th>
                        <th data-field="price">Edited By</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 

                      while ($result3 = mysqli_fetch_assoc($qry3)) { ?>
                      <tr>
                        <td><?php echo $result3['DateOfEdit']; ?></td>
                        <td><?php echo $result3['EditDescription']; ?></td>
                        <td><?php echo $result3['FirstName']." ".$result3['LastName']; ?></td>
                      </tr>                     
                     
                     <?php } ?>
                     
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
            
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