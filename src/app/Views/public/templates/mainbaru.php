<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Leaflet Maps | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('dist/') ?>assets/images/favicon.ico">

    <!-- leaflet Css -->
    <link href="<?= base_url('dist/') ?>assets/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="<?= base_url('dist/') ?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url('dist/') ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('dist/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('dist/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url('dist/') ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <style>
    .leaflet-map {
        height: 470px;
    }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header bg-dark">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= base_url('dist/') ?>assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('dist/') ?>assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= base_url('dist/') ?>assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('dist/') ?>assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="text-light hamburger-icon"><i class="ri-layout-grid-fill"></i>
                            </span>
                        </button>


                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown ms-sm-3 header-item topbar-user bg-dark">
                            <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="<?= base_url('dist/') ?>assets/images/users/avatar-1.jpg"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text text-white">Annat
                                            Adame</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Anna!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i
                                        class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                        class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Balance : <b>$5971.67</b></span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                        class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box bg-success">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url('dist/') ?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url('dist/') ?>assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url('dist/') ?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url('dist/') ?>assets/images/logo-light.png" class="mt-2 mb-2" alt=""
                            height="80">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu" class="mt-2 d-flex flex-wrap justify-content-center">
                        <div class="card-body text-center" style="flex:0 0 50%;">
                            <div class="mx-auto">
                                <img src="<?= base_url('dist/') ?>assets/images/logo_desa_talaga.png" alt=""
                                    width="50px" class="img-thumbnail rounded-circle shadow-none">
                            </div>
                            <p class="text-light mt-0">Profil Desa Talaga Wetan</p>
                        </div>

                        <div class="card-body text-center" style="flex:0 0 50%;">
                            <div class="mx-auto">
                                <img src="<?= base_url('dist/') ?>assets/images/users/avatar-10.jpg" alt="" width="50px"
                                    class="img-thumbnail rounded-circle shadow-none">
                            </div>
                            <p class="text-light mt-0">Profil Desa Talaga Ketan</p>
                        </div>


                        <div class="card-body text-center" style="flex:0 0 50%;">
                            <div class="mx-auto">
                                <img src="<?= base_url('dist/') ?>assets/images/users/avatar-10.jpg" alt="" width="50px"
                                    class="img-thumbnail rounded-circle shadow-none">
                            </div>
                            <p class="text-light mt-0">Tonya Noble</p>
                        </div>

                        <div class="card-body text-center" style="flex:0 0 50%;">
                            <div class="mx-auto">
                                <img src="<?= base_url('dist/') ?>assets/images/users/avatar-10.jpg" alt="" width="50px"
                                    class="img-thumbnail rounded-circle shadow-none">
                            </div>
                            <p class="text-light mt-0">Tonya Noble</p>
                        </div>

                        <div class="card-body text-center" style="flex:0 0 50%;">
                            <div class="mx-auto">
                                <img src="<?= base_url('dist/') ?>assets/images/users/avatar-10.jpg" alt="" width="50px"
                                    class="img-thumbnail rounded-circle shadow-none">
                            </div>
                            <p class="text-light mt-0">Tonya Noble</p>
                        </div>
                    </div>


                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Peta Desa</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Aset Desa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Tanah Desa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Kependudukan</span> <span
                                    class="badge badge-pill bg-danger" data-key="t-hot">Baru</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Cagar Budaya</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Objek Wisata</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->

                        <li class="menu-title"><span data-key="t-menu">Rekapitulasi Data</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Aset Desa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Tanah Desa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Kependudukan</span> <span
                                    class="badge badge-pill bg-danger" data-key="t-hot">Baru</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Cagar Budaya</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" role="button" aria-expanded="false"
                                aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Objek Wisata</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header d-flex align-items-center flex-wrap">
                            <h4 class="card-title mb-0 me-auto">Markers with Custom Icons</h4>
                            <div class="ms-auto mt-2 mt-lg-0">
                                <div class="btn-group dropend mb-0 mb-lg-0">
                                    <button type="button" class="btn btn-outline-success dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-global-line"></i> Layer Peta
                                    </button>
                                    <ul class="dropdown-menu p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                OSM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                RBI
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                ROAD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4" checked>
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Areial
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault5" checked>
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Areial Label
                                            </label>
                                        </div>
                                    </ul>
                                </div>
                                <div class="btn-group dropend ms-0 ms-lg-2">
                                    <button type="button" class="btn btn-outline-success dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-user-location-line"></i> Aset Desa
                                    </button>
                                    <ul class="dropdown-menu p-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Tanah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Kantor Desa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Kantor KUD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Kantor Kebudayaan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Kantor Seni
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Gedung Olahraga
                                            </label>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card header -->




                        <div class="card-body" style="height: 500px;">
                            <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->

                    <div class="row d-none">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Example</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="leaflet-map" class="leaflet-map"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Markers, Circles and Polygons</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="leaflet-map-marker" class="leaflet-map"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row d-none">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Working with Popups</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="leaflet-map-popup" class="leaflet-map"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Markers with Custom Icons</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('dist/') ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('dist/') ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('dist/') ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url('dist/') ?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('dist/') ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= base_url('dist/') ?>assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="<?= base_url('dist/') ?>assets/libs/prismjs/prism.js"></script>

    <!-- leaflet plugin -->
    <script src="<?= base_url('dist/') ?>assets/libs/leaflet/leaflet.js"></script>

    <!-- leaflet map.init -->
    <script src="<?= base_url('dist/') ?>assets/js/pages/leaflet-us-states.js"></script>
    <script src="<?= base_url('dist/') ?>assets/js/pages/leaflet-map.init.js"></script>

    <!-- App js -->
    <script src="<?= base_url('dist/') ?>assets/js/app.js"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

</body>

</html>