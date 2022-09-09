<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Health People</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

    <!-- Plugins css -->
    <link href="<?= base_url('assets/modules/plugins/select2/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/modules/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/modules/plugins/timepicker/bootstrap-material-datetimepicker.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/modules/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet" />

    <!-- App css -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/jquery-ui.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/metisMenu.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/modules/plugins/daterangepicker/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />

</head>

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="crm-index.html" class="logo">
                <span>
                    <img src="<?= base_url('assets/images/logo-sm.png'); ?>" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="<?= base_url('assets/images/logo.png'); ?>" alt="logo-large" class="logo-lg logo-light">
                    <img src="<?= base_url('assets/images/logo-dark.png'); ?>" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Menu</li>
                <li>
                    <a href="<?= base_url('/riwayat') ?>"><i data-feather="trello" class="align-self-center menu-icon"></i><span>Riwayat Vaksin</span></a>
                </li>
                <li>
                    <a href="<?= base_url('/pendaftaran') ?>"><i data-feather="activity" class="align-self-center menu-icon"></i><span>Pendaftaran Vaksin</span></a>
                </li>

                <hr class="hr-dashed hr-menu">
            </ul>
        </div>
    </div>
    <!-- end left-sidenav-->
    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 nav-user-name hidden-sm">Pandeka Setan</span>
                            <img src="<?= base_url('assets/images/users/user-5.jpg') ?>" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('profil') ?>"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">



            <?= $this->renderSection('content') ?>



            <footer class="footer text-center text-sm-left">
                &copy; 2022 INF<span class="d-none d-sm-inline-block float-right">Olivia Jaya<i class="mdi mdi-heart text-danger"></i> by Kelompok 2</span>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/metismenu.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/waves.js'); ?>"></script>
    <script src="<?= base_url('assets/js/feather.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/simplebar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/moment.js'); ?>"></script>
    <script src="<?= base_url('assets/modules/plugins/daterangepicker/daterangepicker.js'); ?>"></script>

    <!-- Plugins js -->
    <script src="<?= base_url('assets/modules/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
    <script src="<?= base_url('assets/modules/plugins/select2/select2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/modules/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
    <script src="<?= base_url('assets/modules/plugins/timepicker/bootstrap-material-datetimepicker.js'); ?>"></script>
    <script src="<?= base_url('assets/modules/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>"></script>
    <script src="<?= base_url('assets/modules/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js'); ?>"></script>

    <script src="<?= base_url('assets/pages/jquery.forms-advanced.js'); ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>

</body>

</html>