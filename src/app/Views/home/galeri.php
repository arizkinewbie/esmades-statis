<div class="container-fluid py-5 mx-2" style="padding-left: 15px; padding-right: 15px; margin-top: 45px;">
   <div class="row justify-content-center">
      <div class="col-lg-9 offset-lg-2 col-md-10 offset-md-1"> <!-- Responsif untuk tablet -->
         <div class="card">
            <div class="card-header">
               <h2 class="text-center">Galeri</h2> <!-- Memindahkan judul ke dalam card header -->
               <ul class="list-inline categories-filter animation-nav text-center"> <!-- Rapikan menu ul li -->
                  <li class="list-inline-item"><a class="categories active" data-filter="*">Semua</a></li>
                  <li class="list-inline-item"><a class="categories" data-filter=".project">Proyek</a></li>
                  <li class="list-inline-item"><a class="categories" data-filter=".designing">Desain</a></li>
                  <li class="list-inline-item"><a class="categories" data-filter=".photography">Fotografi</a></li>
                  <li class="list-inline-item"><a class="categories" data-filter=".development">Pengembangan</a></li>
               </ul>
            </div>
            <div class="card-body">
               <div class="row justify-content-center mx-5"> <!-- Menggunakan mx-5 untuk margin -->
                  <div class="row">
                     <div class="col-lg-12">
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
                        </div>
                        <!-- end row -->
                     </div>
                  </div>
                  <div class="text-center mt-3 mb-4">
                     <a href="javascript:void(0);" class="text-success material-shadow-none"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Muat Lebih Banyak </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>