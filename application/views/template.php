<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $titrePage ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="agw news, rechauffement climatique, actualités, environnement" name="keywords">
        <meta content="Les dernieres nouvelles sur le rechauffement climatique" name="description">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <!-- Favicon -->
        <link href="<?php echo img_url('favicon.png') ?>" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo lib_url('slick/slick.css') ?>" rel="stylesheet">
        <link href="<?php echo lib_url('slick/slick-theme.css') ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo css_url('style.css') ?>" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>agw.news@gmail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+034 23 456 78</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.html">
                                <img src="<?php echo img_url('logo.png') ?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="<?php echo img_url('ads-1.jpg') ?>" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <form action="<?php echo site_url('') ?>" method="get">
                                <input type="text" name="q" placeholder="Recherche">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo site_url('') ?>" class="nav-item nav-link <?php if($active == 0) echo "active" ?>">Accueil</a>
                            <a href="<?php echo site_url('actualites') ?>" class="nav-item nav-link <?php if($active == 1) echo "active" ?>">Actualités</a>
                            <a href="<?php echo site_url('evenements') ?>" class="nav-item nav-link <?php if($active == 2) echo "active" ?>">Evènements</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <?php include($view.'.php'); ?>

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="offset-5 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Accessibility help</a>
                    <a href="">Advertise with us</a>
                    <a href="">Contact us</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy;. Mai 2022</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>R. Manitra Ainaharison <a href="#">ETU001183</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo lib_url('easing/easing.min.js') ?>"></script>
        <script src="<?php echo lib_url('slick/slick.min.js') ?>"></script>

        <!-- Template Javascript -->
        <script src="<?php echo js_url('main.js') ?>"></script>
    </body>
</html>
