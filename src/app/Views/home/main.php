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

    <!-- Leaflet Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
    #map {
        height: 480px;
        /* Atur tinggi peta sesuai kebutuhan */
        width: 100%;
        /* Sesuaikan lebar peta dengan konten card */
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

        <!-- Footer -->
        <?= view('home/footer') ?>
        <!-- end Footer -->

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

        <!-- JAVASCRIPT -->
        <script src="<?= base_url('dist/') ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('dist/') ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url('dist/') ?>assets/libs/node-waves/waves.min.js"></script>
        <script src="<?= base_url('dist/') ?>assets/libs/feather-icons/feather.min.js"></script>
        <script src="<?= base_url('dist/') ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="<?= base_url('dist/') ?>assets/js/plugins.js"></script>

        <!-- prismjs plugin -->
        <script src="<?= base_url('dist/') ?>assets/libs/prismjs/prism.js"></script>

        <!-- App js -->
        <script src="<?= base_url('dist/') ?>assets/js/app.js"></script>


        <!-- Leaflet Map -->
        <script>
        var map = L.map('map').setView([-0.7893, 113.9213], 5); // Koordinat Indonesia: [-0.7893, 113.9213]

        // Mengambil API disini
        L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        }).addTo(map);

        // Icon Marker
        var leafletIcon = L.icon({
            iconUrl: '<?= base_url('dist/') ?>assets/images/logo-sm.png',
            iconSize: [38, 40],
            iconAnchor: [22, 40],
            popupAnchor: [-3, -36]
        })

        // Edit marker daerah disini
        var markerJakarta = L.marker([-6.2088, 106.8456], {
            icon: leafletIcon
        }).addTo(map); // Menambahkan marker di Jakarta

        var markerBandung = L.marker([-6.9175, 107.6191], {
            icon: leafletIcon
        }).addTo(map); // Menambahkan marker di Bandung

        // PopUp Jakarta Area
        markerJakarta.bindPopup("<b> Jakarta </b><br> Ibu kota Indonesia").openPopup();

        // Garis Wilayah Jakarta
        var myGeoJSON = {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                        [
                            [106.97054245, -6.09329647],
                            [106.9695805, -6.15451342],
                            [106.97150448, -6.18607567],
                            [106.9541884, -6.22146142],
                            [106.94360637, -6.24058783],
                            [106.94072036, -6.25780102],
                            [106.90993615, -6.25684476],
                            [106.90512615, -6.27501364],
                            [106.90993615, -6.29509432],
                            [106.92148021, -6.30848106],
                            [106.91474623, -6.36584864],
                            [106.89646811, -6.37254106],
                            [106.87241796, -6.36298042],
                            [106.85413993, -6.34959509],
                            [106.84067181, -6.33716565],
                            [106.81758369, -6.35628779],
                            [106.7973816, -6.3610682],
                            [106.7973816, -6.33907787],
                            [106.80507769, -6.31517421],
                            [106.77814153, -6.3170866],
                            [106.77044552, -6.3610682],
                            [106.71945921, -6.35724391],
                            [106.68578908, -6.35819994],
                            [106.65500495, -6.36298042],
                            [106.64923293, -6.34290238],
                            [106.65981495, -6.31613041],
                            [106.65308089, -6.28935706],
                            [106.64923293, -6.26736368],
                            [106.64297988, -6.2420223],
                            [106.63672684, -6.2300684],
                            [106.61315773, -6.22528675],
                            [106.59968967, -6.20759432],
                            [106.5891076, -6.21954873],
                            [106.5674625, -6.21094158],
                            [106.55543744, -6.19946515],
                            [106.55255143, -6.18225005],
                            [106.58189257, -6.17077301],
                            [106.58814561, -6.15977395],
                            [106.61123372, -6.14255756],
                            [106.61556275, -6.12055802],
                            [106.63816984, -6.1066883],
                            [106.64490391, -6.1157754],
                            [106.67087803, -6.10334036],
                            [106.7103202, -6.09473133],
                            [106.72523129, -6.09042676],
                            [106.74110436, -6.10142726],
                            [106.78391356, -6.10764483],
                            [106.79690062, -6.09520963],
                            [106.8103687, -6.11816673],
                            [106.82872495, -6.1153166],
                            [106.83922885, -6.12103629],
                            [106.85654493, -6.10860138],
                            [106.87722805, -6.10334036],
                            [106.87674703, -6.09473133],
                            [106.91667021, -6.09903586],
                            [106.97054245, -6.09329647]
                        ]
                    ]
                },
                "id": "2281dc87-cda2-45ab-811f-795e996f3d3a",
                "properties": {
                    "name": "Jakarta"
                }
            }, {
                "type": "Feature",
                "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                        [
                            [106.61941075, -6.13155788],
                            [106.61941075, -6.13155788],
                            [106.61941075, -6.13155788],
                            [106.61941075, -6.13155788]
                        ]
                    ]
                },
                "id": "0856cd8f-228e-4d43-9471-532821197879",
                "properties": {
                    "name": ""
                }
            }]
        }

        L.geoJSON(myGeoJSON).addTo(map)
        </script>

</body>

</html>