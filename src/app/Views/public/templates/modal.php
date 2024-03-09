<!-- Full screen modal content -->
<div class="modal fade flip modalFullScreen" tabindex="-1" aria-labelledby="modalFullScreenLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFullScreenLabel">Full Screen Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium material-shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Full screen modal content -->
<div class="modal fade zoomIn modalNews" tabindex="-1" aria-labelledby="modalNewsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNewsLabel">Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-1.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-success-subtle text-success fs-11">Business</span>
                                            </li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">A mix of friends and strangers heading off to
                                                find an adventure</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> James
                                                Ballard</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-2.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-warning-subtle text-warning fs-11">Development</span>
                                            </li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">How to get creative in your work ?</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Ruby
                                                Griffin</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-3.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-info-subtle text-info fs-11">Fashion</span></li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">How to become a best sale marketer in a
                                                year!</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Elwood
                                                Arter</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-4.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-primary-subtle text-primary fs-11">Product</span>
                                            </li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">Manage white space in responsive layouts ?</a>
                                        </h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Nancy
                                                Martino</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-5.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-success-subtle text-success fs-11">Business</span>
                                            </li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">Stack designer Olivia Murphy offers
                                                freelancing advice</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Erica
                                                Kernan</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 11
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-6.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-danger-subtle text-danger fs-11">Design</span></li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">A day in the of a professional fashion
                                                designer</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Jason
                                                McQuaid</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 14
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-7.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-danger-subtle text-danger fs-11">Design</span></li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">Design your apps in your own way</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Henry
                                                Baird</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 19
                                                Nov, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('dist/') ?>assets/images/small/img-8.jpg" alt="" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                        <ul class="list-inline mb-2 mt-3">
                                            <li class="list-inline-item"><span class="badge bg-warning-subtle text-warning fs-11">Development</span>
                                            </li>
                                        </ul>
                                        <h5><a href="javascript:void(0);">How apps is changing the IT world</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Elwood
                                                Arter</li>
                                            <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 10
                                                Aug, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium material-shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade zoomIn modalGallery" tabindex="-1" aria-labelledby="modalGalleryLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalGalleryLabel">Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card-body px-1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <ul class="list-inline categories-filter animation-nav" id="filter">
                                                <li class="list-inline-item"><a class="categories active" data-filter="*">All</a></li>
                                                <li class="list-inline-item"><a class="categories" data-filter=".project">Project</a></li>
                                                <li class="list-inline-item"><a class="categories" data-filter=".designing">Designing</a></li>
                                                <li class="list-inline-item"><a class="categories" data-filter=".photography">Photography</a></li>
                                                <li class="list-inline-item"><a class="categories" data-filter=".development">Development</a></li>
                                            </ul>
                                        </div>

                                        <div class="row gallery-wrapper">
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-1.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-1.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Glasses and laptop from
                                                                    above</h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ron Mackie</a></div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        2.2K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.3K
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-2.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-2.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Working at a coffee shop
                                                                </h5>
                                                            </div>
                                                        </a>

                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        3.2K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.1K
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-3.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-3.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Photo was taken in Beach
                                                                </h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Elwood Arter</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        2.1K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1K
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-4.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-4.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Drawing a sketch</h5>
                                                            </div>
                                                        </a>

                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Jason McQuaid</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        825
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        101
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-5.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-5.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Working from home little
                                                                    spot</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        632
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        95
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-6.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-6.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Project discussion with team
                                                                </h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        3.4K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.3k
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-7.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-7.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Sunrise above a beach</h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">James Ballard</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        735
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        150
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-8.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-8.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Glasses and laptop from
                                                                    above</h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ruby Griffin</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        1.5k
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        250
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-9.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-9.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Dramatic clouds at the
                                                                    Golden Gate Bridge</h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ron Mackie</a></div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        2.2K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.3K
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-10.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-10.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Fun day at the Hill Station
                                                                </h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        632
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        95
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-11.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-11.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">Cycling in the countryside
                                                                </h5>
                                                            </div>
                                                        </a>

                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        3.2K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.1K
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url('dist/') ?>assets/images/small/img-12.jpg" title="">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url('dist/') ?>assets/images/small/img-12.jpg" alt="" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption">A mix of friends and
                                                                    strangers heading off to find an adventure.</h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        3.4K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.3k
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="text-center mt-3 mb-4">
                                            <a href="javascript:void(0);" class="text-success material-shadow-none"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load
                                                More </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- ene card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium material-shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade zoomIn modalRekap" tabindex="-1" aria-labelledby="modalRekapLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRekapLabel">Grafik Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="h5 mb-2 mt-3">Penduduk Berdasarkan Jenis Kelamin</h4>
                        <div id="chartdiv" class="text-center"></div>
                    </div>
                    <div class="col-6">
                        <h4 class="h5 mb-2 mt-3">Penduduk Berdasarkan Jenis Kelamin</h4>
                        <div id="chartdiv2" class="text-center"></div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium material-shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade zoomIn modalKelembagaan" tabindex="-1" aria-labelledby="modalKelembagaanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKelembagaanLabel">Kelembagaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center mt-4">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <a href="javascript:showModal('BPD')">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                        <img src="<?= base_url('dist/') ?>assets/images/lembaga/bpd.png" alt="" class="avatar-sm material-shadow">
                                    </div>
                                    <h5 class="fs-14 mb-1">BPD</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <a href="javascript:showModalGalery()">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                        <img src="<?= base_url('dist/') ?>assets/images/lembaga/lpm.png" alt="" class="avatar-sm material-shadow">
                                    </div>
                                    <h5 class="fs-14 mb-1">LPM</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <a href="javascript:showModalISO()">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                        <img src="<?= base_url('dist/') ?>assets/images/lembaga/bumdes.png" alt="" class="avatar-sm material-shadow">
                                    </div>
                                    <h5 class="fs-14 mb-1">BUMDES</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <a href="javascript:showModalNews()">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                        <img src="<?= base_url('dist/') ?>assets/images/lembaga/pkk.png" alt="" class="avatar-sm material-shadow">
                                    </div>
                                    <h5 class="fs-14 mb-1">PKK</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <a href="javascript:showModalNews()">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                        <img src="<?= base_url('dist/') ?>assets/images/lembaga/karang-taruna.png" alt="" class="avatar-sm material-shadow">
                                    </div>
                                    <h5 class="fs-14 mb-1">Karang Taruna</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <a href="javascript:showModalNews()">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                        <img src="<?= base_url('dist/') ?>assets/images/lembaga/posyandu.png" alt="" class="avatar-sm material-shadow">
                                    </div>
                                    <h5 class="fs-14 mb-1">Kader Posyandu</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium material-shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade zoomIn modalSO" tabindex="-1" aria-labelledby="modalSOLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSOLabel">Struktur Organisasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card-body px-1">
                                <div class="text-center" id="chartDiv1" style="max-width: 700px; height: 400px"></div>
                            </div>
                            <!-- ene card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium material-shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://code.jscharting.com/latest/jscharting.js"></script>
<script>
    // JS 
    var chart = JSC.chart('chartDiv1', {
        debug: false,
        type: 'organizational',

        /* These options will apply to all annotations including point nodes and breadcrumbs. */
        defaultAnnotation: {
            padding: [5, 10],
            margin: [15, 5]
        },
        defaultTooltip_enabled: false,

        defaultSeries: {
            color: '#0ab39c',
            defaultPoint: {
                label_maxWidth: 90,
                /* Default line styling for connector lines */
                connectorLine: {
                    /* No radius on first angle, then 5px on the second angle. */
                    radius: [0, 5],
                    color: '#424242',
                    width: 1,
                    caps: {
                        end: {
                            type: 'arrow',
                            size: 6
                        }
                    }
                }
            }
        },
        series: [{
            points: [{
                    label_text: '<span><img src="https://e-smades.test/dist/assets/images/users/avatar-3.jpg" alt="" style="width: 40px; height: 40px; border-radius: 50%"><br>Kepala Desa<br>H. Irwanudin</span>',
                    id: 'PM',
                },
                {
                    x: 'Deputy Project Manager',
                    id: 'DPM',
                    parent: 'PM'
                },
                {
                    x: 'System Engineering',
                    id: 'SE',
                    parent: 'DPM'
                },
                {
                    x: 'Independent Test Group',
                    id: 'ITG',
                    parent: 'DPM'
                },
                {
                    x: 'Project Technical Lead',
                    id: 'PTL',
                    parent: 'DPM'
                },
                {
                    x: 'Quality Assurance',
                    id: 'QA',
                    parent: 'DPM'
                },
                {
                    x: 'Configuration Manager',
                    id: 'CM',
                    parent: 'DPM'
                },

                {
                    x: 'S/W Subproject Manager 1',
                    id: 'SM1',
                    parent: 'PTL'
                },

                {
                    x: 'S/W Subproject Manager 2',
                    id: 'SM2',
                    parent: 'PTL'
                }
            ]
        }]
    });
</script>