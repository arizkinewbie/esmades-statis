<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title><?= $title ?></title>
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

    .card-body.text-center {
        flex: 0 0 50%;
        transition: transform 0.3s;
        /* Transisi agar perubahan skala terlihat mulus */
    }

    .card-body.text-center:hover {
        transform: scale(1.1);
        /* Perbesar elemen saat dihover */
    }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Header -->
        <?= view('home/header') ?>
        <!-- End Header -->

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
        <?= view('home/sidebar') ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- Content -->
        <?= view('/home/' . $content) ?>
        <!-- End Content -->

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
            <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
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