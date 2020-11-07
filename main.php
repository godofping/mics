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

                <!--start container-->

                <div class="row">
                    <div class="col s12 m12 20">
                                    <div class="card-panel">
                                        <h3 style="font-weight: 200;text-align: center;">Welcome to MICS Knowledge Base System</h3>
                                        
                                    </div>
                                </div>
                </div>




                 <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">


                          <?php if($getUserRes['userlevel'] == 1){?>
<div class="col s12 m6 l3">
                                                                    <div class="card">
                                    <div class="card-content  blue white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Accounts</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM addaccounttable where active = 1");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total accounts</span>
                                        </p>
                                    </div>
                                    <div class="card-action  blue darken-1">
                                        
                                    </div>
                                </div>
                            </div>
                        
                            
                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue darken-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-action-list"></i> Categories</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM categorytable where acivate = 1");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total categories</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue darken-2">
                                  

                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue darken-2 white-text">
                                        <p class="card-stats-title"><i class="mdi-hardware-keyboard-arrow-down"></i> Sub-Categories</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM subcategorytable where activate = 1");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total sub-categories</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue darken-3">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue darken-3 white-text">
                                       <p class="card-stats-title"><i class="mdi-action-account-balance"></i> Entries</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM addformtable");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total entries</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue darken-4">
                                        
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>


                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-action-list"></i> Categories</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM categorytable where acivate = 1");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total categories</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                  

                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-hardware-keyboard-arrow-down"></i> Sub-Categories</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM subcategorytable where activate = 1");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total sub-categories</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content deep-purple white-text">
                                       <p class="card-stats-title"><i class="mdi-action-account-balance"></i> Entries</p>
                                        <h4 class="card-stats-number"><?php 
                                        $qry2 = mysqli_query($connection,"SELECT COUNT(*) as totalaccounts FROM addformtable");
                                        $result2 = mysqli_fetch_assoc($qry2);
                                        echo $result2['totalaccounts'];
                                         ?></h4>
                                        <p class="card-stats-compare"></i> total entries</span>
                                        </p>
                                    </div>
                                    <div class="card-action  deep-purple darken-2">
                                        
                                    </div>
                                </div>
                            </div>



                               <?php } ?>


                        </div>
                     </div>
                     <!--card stats end-->

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