<?php 
include('connection.php');

$getUserQry = mysqli_query($connection, "select * from addaccounttable where AddAccountId = '" . $_SESSION["AddAccountId"] . "'");
$getUserRes = mysqli_fetch_assoc($getUserQry);

 ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="MICS Knowledge Base System">
    <meta name="keywords" content="MICS Knowledge Base System">
    <title>MICS</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="blue darken-4">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="main.php" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">MICS</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>    
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>                              
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                         <li><a href="logout.php" class="btn-flat waves-effect violet accent-2 white-text"> Logout</a>
                                    </li>
                        
                        <!-- Dropdown Trigger -->                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

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
                    if (isset($_GET['istaken'])) {
                        ?>
                        
                        <div class="card-panel red white-text">
                           <i class="mdi-alert-error icon"></i> <strong>Warning!</strong> Registration failed! Username is already taken.
                        </div>

                        <?php
                        } elseif (isset($_GET['success'])) { ?>
                    <div class="card-panel teal white-text">
                       <i class="mdi-navigation-check icon"></i> <strong>Success!</strong> Registration success.
                    </div>
                    <?php } ?>
                   

                    <h4 class="header">Add Account</h4>
                    <div class="row">
                      <form method="POST" action="insert-account.php" class="col s12">

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="FirstName" required="" name="FirstName" type="text">
                            <label for="FirstName">First Name</label>
                          </div>
                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="MiddleName" required="" name="MiddleName" type="text">
                            <label for="MiddleName" >Middle Name</label>
                          </div>
                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="LastName" required="" name="LastName" type="text">
                            <label for="LastName">Last Name</label>
                          </div>
                     </div>

                    

                    <!--<div class="row">
                         <div class="input-field col s12">
                            <select name="Division">
                             <option disabled="" selected="" value="none">Please select division</option>
                              <option value="Division 1">Division 1</option>
                              <option value="Division 2">Division 2</option>
                              <option value="Division 3">Division 3</option>
                            </select>
                          </div>

                     </div>  --> 

                     
                    

                    <!-- <div class="row">
                         <div class="input-field col s12">
                          
                            <select name="OfficeLocation">
                             <option disabled="" selected="" value="none">Please Office Location</option>
                              <option value="1st Floor">1st Floor</option>
                              <option value="2nd Floor">2nd Floor</option>
                              <option value="3rd Floor">3rd Floor</option>
                              <option value="4th Floor">4th Floor</option>
                              <option value="5th Floor">5th Floor</option>
                              <option value="6th Floor">6th Floor</option>
                            </select>
                          </div>-->

                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="ContactNumber" required="" name="ContactNumber" maxlength="11" type="text">
                            <label for="ContactNumber">Contact Number</label>
                          </div>
                     </div>


                     <div class="row">
                          <div class="input-field col s12">
                            <input id="Username" required="" name="Username" type="text">
                            <label for="Username">Username</label>
                          </div>
                     </div>

                     <div class="row">
                          <div class="input-field col s12">
                            <input id="Password" pattern=."{8, }" required title="8 character minimum" required="" name="Password" type="password">
                            <label for="Password">Password</label>
                          </div>
                     </div>



                       
                        
                       
                     
                    </div>
                  </div>
                </div>  

                <div class="row">
                            <div class="input-field col s12">
                    
                                <div style="text-align: right;">
                                   <button type="submit" class="btn waves-effect waves-light green">Create Account</button>
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

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                    
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

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