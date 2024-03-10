<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Profil</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <h6 class="fs-15">Sejarah</h6>
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-2">
                            <p class="text-muted mb-0">
                                <?= $sejarah ?>
                            </p>
                        </div>
                    </div>
                    <h6 class="fs-16 my-3">Visi</h6>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-2 ">
                            <p class="text-muted mb-0"><?= $visi ?></p>
                        </div>
                    </div>
                    <h6 class="fs-16 my-3">Misi</h6>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-2 ">
                            <p class="text-muted mb-0"><?= $misi ?></p>
                        </div>
                    </div>

                </div>
            </div>

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
    <?= $this->include('home/footer') ?>
    <!-- end main content-->

</div>