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

                <?php $qry2 = mysqli_query($connection,"select * from subcategorytable where SubCategoryId = '" . $_GET['SubCategoryId'] . "' and activate = 1"); 
                $result2 = mysqli_fetch_assoc($qry2);
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
                                           
                                        
                                       
              
                <!--Flat Buttton-->
                <div id="flat-button" class="section">
                  <div class="row">
                    
                    
                    
                     
                      <div style="text-align: right;"><a href="addentry.php?SubCategoryId=<?php echo $result2['SubCategoryId']; ?>" class="btn-flat waves-effect pink accent-2 white-text">Add Entry</a></div>
                     
                 
                  </div>
                </div>
                                     
                                    
                             </li>       
                                

                                  <?php 



                                  $qry3 = mysqli_query($connection,"select * from addformtable where SubCategoryID = '" . $_GET['SubCategoryId'] . "'");

                                  if (mysqli_num_rows($qry3) < 1) { ?>
                                    <li class="collection-header">
                                          <p id="noentries"> No Entries</p>
                                      </li>
                                   <?php   
                                  }
                                  ?>



                                 <div id="searchresults"></div>
                                 <input type="hidden" type="text" id="SubCategoryId" value="<?php echo $_GET['SubCategoryId']; ?>">
                                    

                                      
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
    


$('#search').keyup(function()
{
    var searchterm = $('#search').val();
    var SubCategoryId = $('#SubCategoryId').val();
        

        $.post('search-entries.php',{searchterm:searchterm,SubCategoryId:SubCategoryId},
        function(data)
        {
            $('#searchresults').html(data);
        });

});


$('#search').ready(function()
{
    var searchterm = $('#search').val();
    var SubCategoryId = $('#SubCategoryId').val();
        
        

        $.post('search-entries.php',{searchterm:searchterm,SubCategoryId:SubCategoryId},
        function(data)
        {
            $('#searchresults').html(data);
        });

});




</script>
</body>

</html>