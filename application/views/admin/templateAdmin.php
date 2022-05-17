<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>AGW News</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo img_url('favicon.png') ?>">
    <link href="<?php echo css_url('style-admin.min.css') ?>" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="<?php echo site_url('admin') ?>">
                        <b class="logo-icon">
                            <img src="<?php echo img_url('logo-icon.png') ?>" alt="homepage" />
                        </b>
                        <span class="logo-text">
                            <img src="<?php echo img_url('logo-text.png') ?>" alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                    href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                            href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li>
                            <a class="profile-pic" href="<?php echo site_url('login/logout') ?>">
                                <span class="text-white font-medium">Deconnexion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                            aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        
        <div class="page-wrapper" style="min-height: 250px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?php include($view.'.php'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center"> 
                Copyright ©. Mai 2022
                <p>Manitra Ainaharison</p>
                <a href="#">ETU001183</a>
            </footer>
        </div>
    </div>

    <script src="<?php echo js_url('jquery.min.js') ?>"></script>
    <script src="<?php echo js_url('bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo js_url('app-style-switcher.js') ?>"></script>
    <script src="<?php echo js_url('waves.js') ?>"></script>
    <script src="<?php echo js_url('sidebarmenu.js') ?>"></script>
    <script src="<?php echo js_url('custom.js') ?>"></script>

</body>
</html>