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
                                        <h4 class="task-card-title">Profile</h4>
                                        
                                    </li>
                                 

                                  
                                      <li class="collection-header">
                                        
                                        <div id="basic-form" class="section">
              <div class="row">
               


                        <div class="col s12 m12 20">
                                <div id="profile-card" class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="images/user-bg.jpg" alt="user background">
                                    </div>
                                    <div class="card-content" class="cyan-text">
                                        <img src="images/avatar.jpg" alt="" class="circle responsive-img activator card-profile-image">

                                        <a href="edit-account.php?AddAccountId=<?php echo $getUserRes['AddAccountId']; ?>&from=profile" class="btn tooltipped    btn-floating activator btn-move-up waves-effect waves-light darken-2 right" data-position="top" data-delay="50" data-tooltip="Edit Profile">

                                        

                                            <i class="mdi-editor-mode-edit"></i>
                                        </a>

                                        <!-- <a class="btn tooltipped col s4 offset-s4 l2 offset-l1" data-position="top" data-delay="50" data-tooltip="I am tooltip"> Top</a> -->

                                        <span class="card-title activator grey-text text-darken-4"> <?php echo $getUserRes['FirstName']. " " . $getUserRes['MiddleName'] . " " . $getUserRes['LastName']; ?></span>

                                        <p><i class="mdi-action-account-box cyan-text text-darken-2"></i> <?php if ($getUserRes['userlevel'] == 1) {
                                            echo "Administrator";
                                             }
                                            else
                                            {
                                                echo "Technician";
                                            }
                                         ?></p>

                                        <p><i class="mdi-editor-border-inner cyan-text text-darken-2"></i> <?php echo $getUserRes['Division'] ?></p>

                                        <p><i class="mdi-communication-quick-contacts-dialer cyan-text text-darken-2"></i> <?php echo $getUserRes['ContactNumber'] ?></p>

                                        <p><i class="mdi-maps-my-location cyan-text text-darken-2"></i> <?php echo $getUserRes['OfficeLocation'] ?></p>

                                        <p><i class="mdi-maps-location-history cyan-text text-darken-2"></i> <?php echo $getUserRes['Username'] ?></p>

                                        <div class="row">
                            <div class="input-field col s12">
                    
                                <div style="text-align: right;">
                                   <a href="change-password.php?AddAccountId=<?php echo $getUserRes['AddAccountId']; ?>&from=profile"><button type="button" class="btn waves-effect waves-light purple">Change password</button></a>
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
        $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
    </script>
</body>

</html>