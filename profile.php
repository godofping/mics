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

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="profile.php"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                
                                   
                                    <li class="divider"></li>
                                   
                                    <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $getUserRes['FirstName']." ".$getUserRes['LastName'] ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal"><?php if($getUserRes['userlevel'] == 1){echo "Administrator";}else{echo "Technician";} ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="main.php" class="waves-effect waves-cyan"><i class="mdi-action-home"></i> Home</a>
                    </li>

                    <?php if ($_SESSION["userlevel"] == 1) { ?>
                        <li class="bold"><a href="add-edit-delete-accounts.php" class="waves-effect waves-cyan"><i class="mdi-action-account-box"></i> Accounts</a>
                    </li>
                     
                    

                    <li class="bold"><a href="add-edit-delete-category.php" class="waves-effect waves-cyan"><i class="mdi-action-toc"></i> Categories</a>
                    </li>

                   <?php } ?>

                   
                    <?php 
                     $qry = mysqli_query($connection,"select * from categorytable where acivate = 1 group by CategoryId");
                    while ($result = mysqli_fetch_assoc($qry)) { ?>
                    
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            
                            


                            <li class="bold"><a  style="padding-left: 0.6cm;" class="collapsible-header waves-effect waves-cyan"><i class="mdi-navigation-expand-more"></i> <?php echo $result['NameOfCategory'] ?></a>
                                <div class="collapsible-body">
                                    <ul>
                                    <?php 
                     $qry1 = mysqli_query($connection,"select * from subcategorytable where CategoryId = '" . $result['CategoryId'] . "' and activate = 1");
                    while ($result1 = mysqli_fetch_assoc($qry1)) { ?>
                                        <li><a  style="padding-left: 0.8cm;" href="menu.php?SubCategoryId=<?php echo $result1['SubCategoryId']; ?>"> <?php echo $result1['NameOfSubCategory'] ?></a>
                                        </li>
                                          <?php } ?>
                                          <li><a href="add-edit-delete-subcategory.php?CategoryId=<?php echo $result['CategoryId']; ?>"> new S-Category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                         
                        </ul>
                    </li>
                    <?php } ?>

                   




                    

                                     
           
                 
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

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
    <script type="text/javascript">
        $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
    </script>
</body>

</html>