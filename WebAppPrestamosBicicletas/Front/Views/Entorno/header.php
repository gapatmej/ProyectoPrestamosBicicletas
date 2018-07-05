 <?php 
 /* Descripción:
 *
 * Vista que contiene los elementos html para el header del sitio web
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
 ?>  
 <head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema para gestionar los prestamos de bicletas ">
    <meta name="author"      content="Andres Peralta">

    <title>SISTEMA DE GESTION "PRESTAMOS DE BICICLETAS"</title>

    <link rel="stylesheet" href="<?php echo BOOTSTRAP_CSS . "bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "font-awesome.min.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "animate.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "magnific-popup.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "flexslider.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "form-elements.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "style.css" ?>">
    <link rel="stylesheet" href="<?php echo ANDIA_AGENCY_V2 . "media-queries.css" ?>">

    
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ICONS . "apple-touch-icon-144-precomposed.png" ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ICONS . "apple-touch-icon-114-precomposed.png" ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ICONS . "apple-touch-icon-72-precomposed.png" ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo ICONS . "apple-touch-icon-57-precomposed.png" ?>">
    <script src="<?php echo JQUERY?>jquery.min.js"></script>
    <script src="<?php echo BOOTSTRAP_JS?>bootstrap.min.js"></script>

</head>

<nav class="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style ='background:url(<?php echo LOGOS . "logo_red.png" ?>) left center no-repeat;' href="index.html">BiciQuito</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.html"><i class="fa fa-home"></i><br>Home</a>
                </li>
                <li>
                    <a href="portfolio.html"><i class="fa fa-info"></i><br>Info</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i><br>Reservas y Alquiler</a>
                </li>
                <li>
                    <a href="<?php echo APP_URL ?>login_administrador/show"><i class="fa fa-tasks"></i><br>Administrador</a>
                </li>
                <li>
                    <a href="about.html"><i class="fa fa-comments"></i><br>Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
