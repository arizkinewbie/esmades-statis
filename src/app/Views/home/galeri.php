<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center flex-wrap">
                            <h2 class="mb-0"><?= ucwords(str_replace('-', ' ', $content)) ?></h2>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center card-header">
                                        <ul class="list-inline categories-filter animation-nav" id="filter">
                                            <li class="list-inline-item"><a class="categories active" data-filter="*">All</a></li>
                                            <!--<li class="list-inline-item"><a class="categories" data-filter=".pembangunan">Pembangunan</a></li>
                                            <li class="list-inline-item"><a class="categories" data-filter=".project">Project</a></li>
                                            <li class="list-inline-item"><a class="categories" data-filter=".designing">Designing</a></li>
                                            <li class="list-inline-item"><a class="categories" data-filter=".photography">Photography</a></li>
                                            <li class="list-inline-item"><a class="categories" data-filter=".development">Development</a></li> -->
                                            <?php
                                            // Loop melalui setiap elemen dalam $value
                                            foreach ($api as $item) {
                                                // HTML untuk menampilkan setiap galeri
                                            ?>
                                                <li class="list-inline-item"><a class="categories" data-filter=".<?= $item['jenis_galeri'] ?>"><?= $item['jenis_galeri'] ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                    <div class="row gallery-wrapper mx-2">
                                        <?php
                                        // Loop melalui setiap elemen dalam $value
                                        foreach ($api as $item) {
                                            // HTML untuk menampilkan setiap galeri
                                        ?>
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project <?= $item['jenis_galeri'] ?>" data-category="<?= $item['jenis_galeri'] ?>">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="<?= base_url($item['file']) ?>" title="<?= $item['keterangan'] ?>">
                                                            <img class="gallery-img img-fluid mx-auto" src="<?= base_url($item['file']) ?>" alt="<?= $item['keterangan'] ?>" />
                                                            <div class="gallery-overlay">
                                                                <h5 class="overlay-caption"><?= $item['keterangan'] ?></h5>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="box-content">
                                                        <div class="d-flex align-items-center mt-1">
                                                            <div class="flex-grow-1 text-muted">Diposting pada <a href="" class="text-body text-truncate"><?= $item['created_at'] ?></a></div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3">
                                                                    <!-- <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                        2.2K
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0 material-shadow-none">
                                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                        1.3K
                                                                    </button> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography pembangunan" data-category="photography pembangunan">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/11/BLT.1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/11/BLT.1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Pembagian BLT DESA</h5>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-posyandu2-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-posyandu2-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Pembangunan Posyandu</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Elwood Arter</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing pembangunan" data-category="project designing pembangunan">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/hotmik-cikirai-1-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/hotmik-cikirai-1-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Hotmik Cikirai pembangunan</h5>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Jason McQuaid</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing pembangunan" data-category="project designing pembangunan">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-saluran-pasar-2-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-saluran-pasar-2-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Saluran Pasar Sayur
                                                            </h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography pembangunan" data-category="photography pembangunan">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/saluran-karanganyar-2-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/saluran-karanganyar-2-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Saluran Karanganyar
                                                            </h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-saluran-astana-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-saluran-astana-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Saluran Astana</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">James Ballard</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography pembangunan" data-category="photography pembangunan">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-jalankadawung-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/talagawetan-jalankadawung-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Jalan Kadawung
                                                            </h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ruby Griffin</a></div>
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
                                        </div> -->
                                        <!-- end col -->

                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development pembangunan" data-category="designing development pembangunan">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Jalan Baru
                                                            </h5>
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
                                        </div> -->
                                        <!-- end col -->

                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Fun day at the Hill Station</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a></div>
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
                                        </div> -->
                                        <!-- end col -->

                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Cycling in the countryside</h5>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a></div>
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
                                        </div> -->
                                        <!-- end col -->

                                        <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="https://talagawetan.desa.id/wp-content/uploads/2020/10/jalanbaru-1-1-438x408.jpg" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">A mix of friends and strangers
                                                                heading off to find an adventure.</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a></div>
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
                                        </div> -->
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="text-center mt-2 mb-4">
                                        <a href="javascript:void(0);" class="text-success material-shadow-none"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More
                                        </a>
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
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
</div>
<!-- 
<script>
// Ambil semua tautan filter
const filterLinks = document.querySelectorAll('.categories');

// Ambil semua elemen galeri
const galleryItems = document.querySelectorAll('.element-item');

// Tambahkan event listener untuk setiap tautan filter
filterLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();

        // Dapatkan kategori yang ingin difilter
        const category = this.getAttribute('data-filter');

        // Sembunyikan semua elemen galeri
        galleryItems.forEach(item => {
            item.style.display = 'none';
        });

        // Tampilkan elemen galeri yang sesuai dengan kategori
        document.querySelectorAll(category).forEach(item => {
            item.style.display = 'block';
        });
    });
});
</script> -->