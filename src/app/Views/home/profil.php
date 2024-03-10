<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Profil</h4>
                    <div class="ms-auto mt-2 mt-lg-0">
                        <div class="btn-group dropend mb-0 mb-lg-0">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-global-line"></i> Layer Peta
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        OSM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        RBI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        ROAD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Areial
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Areial Label
                                    </label>
                                </div>
                            </ul>
                        </div>
                        <div class="btn-group dropend ms-0 ms-lg-2">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-user-location-line"></i> Aset Desa
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tanah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor Desa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor KUD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor Kebudayaan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor Seni
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Gedung Olahraga
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card header -->




                <div class="card-body" style="height: 500px;">
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