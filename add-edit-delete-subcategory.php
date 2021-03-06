<?php 
include('connection.php');

//$getUserQry = mysqli_query($connection, "select * from addaccounttable where AddAccountId = '" . $_SESSION["AddAccountId"] . "'");
$getUserQry = mysqli_query($connection, "SELECT * FROM addaccounttable WHERE AddAccountId = '" . $_SESSION["AddAccountId"] . "' AND active = '" . 1 . "'");


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
                                        <h4 class="task-card-title">Sub-Category</h4>
                                        
                                    </li>
                                 

                                  
                                      <li class="collection-header">
                                        
                                        <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 12">
                  
                   
                 
                        
                        <div class="row">
                      
                <div class="col s12 m12 12">
                <?php
                   $qry4 = mysqli_query($connection,"select * from view_subcategory where CategoryId = '" . $_GET['CategoryId'] . "'");
                     $result4 = mysqli_fetch_assoc($qry4);

                     ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <div class="card-panel teal white-text">
                           <i class="mdi-navigation-check icon"></i> <strong>Success!</strong> The Item is deleted!
                        </div>
                    <?php } ?>



                   

                    <h4 class="header">Manage "<?php echo $result4['NameOfCategory']; ?>" Sub-Categories</h4>



                     <div class="row">
                            <div class="input-field col s12">
                    
                                <div style="text-align: right; margin-bottom: 1rem;">
                                    <a href="add-subcategory.php?CategoryId=<?php echo $_GET['CategoryId'] ?>"><button type="button" class="btn-flat waves-effect pink accent-2 white-text">New Sub-Category</button></a>
                                </div>

                               
                            </div>
                          </div>
                    <div class="row">
                         <!--Borderless Table-->
                        <div id="borderless-table">
                         
                            <div class="row">
                                <div class="container">

                                    <div class="input-field col s12">
                                            <input id="searchtextbox" name="searchtextbox" type="text" class="validate">
                                            <label for="first_name">Search</label>
                                        </div>

                                    <div class="col s12 m12 20" style="overflow: auto;">
                                        
                                     
                                        <div id="searchresults"></div>
                                        <input type="text" id="CategoryId" hidden value="<?php echo $_GET['CategoryId']; ?>">

                                    </div>
                                </div>
                            </div>

                         
                                
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
    
$('#searchtextbox').keyup(function()
{
    var searchterm = $('#searchtextbox').val();
    var CategoryId = $('#CategoryId').val();

        $.post('search-sub-category.php',{searchterm:searchterm,CategoryId:CategoryId},
        function(data)
        {
            $('#searchresults').html(data);
        });

});


$('#searchtextbox').ready(function()
{
    var searchterm = $('#searchtextbox').val();
    var CategoryId = $('#CategoryId').val();

        $.post('search-sub-category.php',{searchterm:searchterm,CategoryId:CategoryId},
        function(data)
        {
            $('#searchresults').html(data);
        });
    
    
});
</script>

</body>

</html>