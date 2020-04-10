<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title><?= $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           'use strict';
        jQuery('#headerwrap').backstretch([
          "assets/images/actu1.jpg",
          "assets/images/image.png",
          "assets/images/actu5.jpg"
        ], {duration: 8000, fade: 500});

        $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{     
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "assets/img/marker.png",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: { 
                image: "assets/img/marker.png", 
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14 });
    });
    </script>
<style type="text/css">
#topbar {
 background: #1C563D; 
 border:2px solid white;
 border-top-style:2px solid white;
 border-bottom-style:2px solid white;
  }

#topbar .contact-info a {
  line-height: 1;
  color: white;
}
#topbar .contact-info b {
  line-height: 1;
  color: white;
}

#topbar .contact-info a:hover {
  color: #50d8af;
}

#topbar .contact-info i {
  color: white;
  padding: 4px;
}

#topbar .contact-info .fa-phone {
  padding-left: 20px;
  margin-left: 20px;
  border-left: 1px solid white;
}

/* Nav Meu Styling */

.navbar-nav a {
  padding: 10px 8px;
  text-decoration: none;
  display: inline-block;
  color: #555;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  font-size:16px;
  outline: none;
  display:block;
  border-radius:8px;
  -moz-border-radius:8px;
  -webkit-border-radius:3px;
  background:repeat;
}

</style>
</head>

<body id="page-top" class="index">
    <section  id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-right">
        <i class="fa fa-envelope-o"></i><a href="#"><b>fermeainoma.com</b></a>
        <i class="fa fa-phone"></i><b> +22700000000 </b>
      </div>
    </div>
  </section>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-shrink bounceInDown" data-wow-delay="2s" style="background: #fff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <nav id="nav-menu" class="pull-left">
        <!-- logo -->
        <center><a href="index.php?action=home"><img src="logo.jpg" height="100" width="110" alt="" ></a></center>
      </nav>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="menu-active"><a href="index.php?action=home" >Accueil</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Qui sommes nous ? <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.php?action=presentation">Présentation</a></li>
                            <li><a href="#">Objectif</a></li>
                            <li><a href="#">Notre vocation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Produits <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.php?action=pluviales">Production de semence pluviales</a></li>
                            <li><a href="index.php?action=legumes">Production de semence de légumes</a></li>
              
                        </ul>
                    </li>
          <li><a href="index.php?action=activite">Activités</a></li>
          <li><a href="index.php?action=actualite">Actualités</a></li>
                    <li><a href="index.php?action=contact">Contact</a></li>
                    <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="search-wrapper">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Recherche" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Header -->
    <header id="headerwrap" class="fullheight">
        <div class="container">
            <div class="intro-text">
                
            </div>
        </div>
    </header>
    <?php echo $content ?>
     <!-- Section contact -->

    <section id="footer-widgets" class="divider-wrapper">
        <div class="section-inner">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading"><strong>Contactez-nous</strong></h2>
                    </div>
                    <div class="col-md-6">
                        <div id="message"></div>
                        <form method="post" action="sendemail.php" id="contactform">
                            <p><input type="text" class="form-control" name="nom" placeholder="Votre nom *" id="name" required data-validation-required-message="Please enter your name." /></p>
                            <p><input type="text" class="form-control" name="email" placeholder="Votre Email *" id="email" required data-validation-required-message="Please enter your email address." /></p>
                            <p ><input type="text" class="form-control" name="website" placeholder="Votre URL *" id="website" required data-validation-required-message="Please enter your web address." /></p>
                            <p><textarea name="comments" class="form-control" id="comments" placeholder="Votre Message *" required data-validation-required-message="Please enter a message."></textarea></p>
                            <input class="btn btn-outlined btn-primary pull-right" type="submit" name="submit" value="Envoyer" />
                        </form>
                    </div>
                
                    <div class="widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Regoignez-nous</strong></h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Facebook</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">twitter</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Instagram</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>  
                    </div><!--/.col-md-3-->

                    <div class="widget carousel-widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Latest</strong> Works</h4>
                        <div class="row">
                            <ul class="direction-aware owl-carousel-paged wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                                <li class="portfolio-item da-item">
                                    <a href="#" title="View Post">
                                        <img src="assets/images/images.jpg" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                 <li class="portfolio-item da-item">
                                    <a href="#" title="View Post">
                                        <img src="assets/images/actu1.jpg" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="#" title="View Post">
                                        <img src="assets/images/actu3.jpg" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="#" title="View Post">
                                        <img src="assets/images/actu4.jpg" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                 <li class="portfolio-item da-item">
                                    <a href="#" title="View Post">
                                        <img src="assets/images/actu5.jpg" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="#" title="View Post">
                                        <img src="assets/images/photo.jpg" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="divider-wrapper-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright wow fadeInUp">Designed by Distinctive Themes</span>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#" id="back-to-top"><i class="pe-7s-angle-up fa-4x"></i></a>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons wow fadeInUp">
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/plugins.js"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/init.js"></script>

</body>

</html>