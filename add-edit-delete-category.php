<?php 
include('connection.php');

//$getUserQry = mysqli_query($connection, "select * from addaccounttable where AddAccountId = '" . $_SESSION["AddAccountId"] . "'");


$getUserQry = mysqli_query($connection, "SELECT * FROM addaccounttable WHERE AddAccountId = '" . $_SESSION["AddAccountId"] . "' AND active = '" . 1 . "'");
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
                            <input type="text" id="search" class="search-out-text">
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
                                        <h4 class="task-card-title">Category</h4>
                                        
                                    </li>
                                 

                                  
                                      <li class="collection-header">
                                        
                                        <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 12">
                  
                   
                     
                   
                        
                        <div class="row">
                      
                <div class="col s12 m12 12">
                  
                    <h4 class="header">Manage Categories</h4>

                    <?php if (isset($_GET['success'])) { ?>
                        <div class="card-panel teal white-text">
                           <i class="mdi-navigation-check icon"></i> <strong>Success!</strong> The Item is deleted!
                        </div>
                    <?php } ?>


                     <div class="row">
                            <div class="input-field col s12">
                    
                                <div style="text-align: right; margin-bottom: 1rem;">
                                    <a href="add-category.php"><button type="button" class="btn-flat waves-effect pink accent-2 white-text">New Category</button></a>
                                </div>

                               
                            </div>
                          </div>
                    <div class="row">
                         <!--Borderless Table-->
            <div id="borderless-table">
             
              <div class="row">
                <div class="container">
                <div class="col s12 m12 20">
                    
                     <div id="searchresults"></div>

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
    
$('#search').keyup(function()
{
    var searchterm = $('#search').val();

        $.post('search-categories.php',{searchterm:searchterm},
        function(data)
        {
            $('#searchresults').html(data);
        });

});


$('#search').ready(function()
{
    var searchterm = $('#search').val();

        $.post('search-categories.php',{searchterm:searchterm},
        function(data)
        {
            $('#searchresults').html(data);
        });
    
    
});
</script>
</body>

</html>