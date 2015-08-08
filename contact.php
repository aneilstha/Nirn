<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <title>Contact &laquo; NIRN Nepal</title>
    <!-- core CSS -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body>
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
                        <li class="dropdown">
                            <a href="events" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="events">Reports</a></li>
                                <li><a href="#">Conference Papers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="events" class="dropdown-toggle" data-toggle="dropdown">About Us</i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="members">Members</a></li>
                            <li><a href="partners">Partners and Supporters</a></li>
                            </ul>
                        </li>
                        <li><a href="gallerypage">Photo Gallery</a></li>
                        <li class="active"><a href="contact">Contact Us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/navmenu-->
</header>
<section id="contact-info">
    <div class="center">                
     <h2>How to Reach Us?</h2>
    </div>
     <div class="gmap-area">   
    <?php include_once('map.php') ?>
    </div>   
</section> 
 
       
    <section id="contact-page">
        <div class="container">
            <div class="center wow fadeInDown">        
                <h2>Drop Your Message</h2>
                
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-md-5 col-lg-5 col-xs-5 col-sm-offset-1 wow fadeInDown">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 col-xs-5">
                        <div class="form-group wow fadeInDown">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group wow fadeInDown">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-md" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php include_once('footer.php') ?>
        <!--/#footer-->

    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>