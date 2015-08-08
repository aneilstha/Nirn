<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="national inter religious network nepal is a ngo working on the fields of Women violence, child marriage, Religious faith  and Descrimination.">
    <meta name="author" content="nirn">
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <title>Events &laquo; NIRN Nepal</title>  
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <?php include_once ('header.php') ?>
        </div><!--/.top-bar-->

<!--navmenu-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="index"><img src="images/logo.png" class="mainlogo img-responsive" alt="logo"></a>
                </div>
                
                <div class="maintitle">
                <a href="index"><h2>NATIONAL INTER-RELIGIOUS</h2>
                <h2>NETWORK NEPAL ON VAW</h2></a> 
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who are we?</a>
                            <ul class="dropdown-menu">
                                <li><a href="introduction">Introduction</a></li>
                                <li><a href="history">Background</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >What we do?</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Our Programs</a></li>
                                <li><a href="#">Completed Works</a></li>
                                <li><a href="work">Area of Work</a></li>
                                <li><a href="earthquake">Gorkha Earthquake</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="events" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="events">Reports</a></li>
                                <li><a href="#">Conference Papers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="events" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="members">Members</a></li>
                            <li><a href="partners">Partners and Supporters</a></li>
                            </ul>
                        </li>
                        <li><a href="gallerypage">Photo Gallery</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
            </div><!--//container-->
        </nav><!--/navmenu-->
</header>

  <!-- body-->
    <section id="middle">
        <div class="container events-margin">
            <div class="row">
               <div class="col-xs-12 col-sm-7 wow fadeInDown">
                    <div class="accordion">
                        <h2>What are happening right now?</h2>
                       <?php include_once('accordion.php') ?>

                    </div><!--/#accordion1-->
                </div>


                <div class="col-xs-12 col-sm-5 wow fadeInDown">
                    <div class="report">
                        <h2>Reports</h2>
                        <div class="media report-inner">
                            <div class="pull-left">
                                <a href="reports/eq2015" download="Partnership with Religious Network and Structure to end child Marriage and other harmful practices"><img src="images/download.png"></a>
                            </div>
                            <div class="event-body">
                                <p>Relief program by NIRN Nepal on Earthquake 2015</p>
                            </div>
                         </div>
                          <div class="media report-inner">
                            <div class="pull-left">
                                <a href="reports/Partnership with Religious Network and Structure to end child Marriage and other harmful practices.pdf" download="Partnership with Religious Network and Structure to end child Marriage and other harmful practices"><img src="images/download.png"></a>
                            </div>
                            <div class="event-body">
                                <p>Partnership with Religious Network and Structure to end child Marriage and other harmful practices</p>
                             </div>
                         </div>
                          <div class="media report-inner">
                            <div class="pull-left">
                                <a href="reports/First quarter report.pdf" download="First quarter report"><img src="images/download.png"></a>
                            </div>
                            <div class="event-body">
                                <p>First quarter report</p>
                            </div>
                            </div>
                          <div class="media report-inner">
                            <div class="pull-left">
                                <a href="reports/three days training for religious leaders in Saptari district.pdf" download="three days training for religious leaders in Saptari district"><img src="images/download.png"></a>
                            </div>
                            <div class="event-body">
                                <p>Three days training for religious leaders in Saptari district</p>
                             </div>
                         </div>
                          <div class="media report-inner">
                            <div class="pull-left">
                                <a href="reports/Day of prayer.pdf" download="three days training for religious leaders in Saptari district"><img src="images/download.png"></a>
                            </div>
                            <div class="event-body">
                                <p>Day of Prayer</p>
                             </div>
                         </div>
                     </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/news-->
<?php include_once('footer.php') ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>