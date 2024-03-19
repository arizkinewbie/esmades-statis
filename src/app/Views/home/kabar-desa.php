<div class="container-fluid py-5 mx-2" style="padding-left: 15px; padding-right: 15px; margin-top: 45px;">
   <div class="row justify-content-center">
      <div class="col-lg-9 offset-lg-2 col-md-10 offset-md-1">
         <div class="card">
            <div class="card-header">
               <h2 class="text-center">Berita</h2>
               <p class="mb-4 text-center">Informasi terbaru dan berita terkini.</p>
            </div>
            <div class="card-body">
               <div class="row">

                  <?php
                  // Contoh, asumsikan $api sudah berisi semua data berita yang dibutuhkan
                  // Loop melalui setiap berita
                  for ($i = 0; $i < count($api); $i++) {
                     // Decode JSON string menjadi array
                     $fotoArray = json_decode($api[$i]['foto'], true);
                     // Cek apakah fotoArray adalah array dan memiliki setidaknya satu item
                     if (is_array($fotoArray) && count($fotoArray) > 0) {
                        // Tentukan indeks foto berdasarkan iterasi loop, mod dengan jumlah total foto untuk menghindari index out of bounds
                        $fotoIndex = $i % count($fotoArray);
                        $foto = $fotoArray[$fotoIndex]; // Ambil foto berdasarkan indeks yang ditentukan

                        // HTML untuk menampilkan berita dan foto
                  ?>
                        <div class="col-lg-6 mb-4">
                           <div class="card border">
                              <div class="card-body">
                                 <div class="d-sm-flex">
                                    <div class="flex-shrink-0">
                                       <img src="<?= base_url($foto['path_file']) ?>" alt="Foto Berita" width="115" class="rounded-1" />
                                    </div>
                                    <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                       <ul class="list-inline mb-2 mt-3">
                                          <li class="list-inline-item"><span class="badge bg-success-subtle text-success fs-11"><?= $api[$i]['jenis_berita'] ?></span></li>
                                       </ul>
                                       <h5><a href="javascript:void(0);"><?= $api[$i]['judul_berita'] ?></a></h5>
                                       <ul class="list-inline mb-0">
                                          <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> James Ballard</li>
                                          <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i><?= $api[$i]['created_at'] ?></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                  <?php
                     }
                  }
                  ?>


                  <!--end col-->

                  <!-- <div class="col-lg-6 mb-4">
                     <div class="card border">
                        <div class="card-body">
                           <div class="d-sm-flex">
                              <div class="flex-shrink-0">
                                 <img src="https://talagawetan.desa.id/wp-content/uploads/2022/09/mudes-rkp-2023-1024x736.jpg" alt="" width="115" class="rounded-1" />
                              </div>
                              <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                 <ul class="list-inline mb-2 mt-3">
                                    <li class="list-inline-item"><span class="badge bg-warning-subtle text-warning fs-11">Development</span>
                                    </li>
                                 </ul>
                                 <h5><a href="javascript:void(0);">MUSDES Rencana Kerja Pemerintah Desa (RKPDes) Tahun Anggaran 2023</a></h5>
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
                  </div> -->
                  <!--end col-->

                  <!-- <div class="col-lg-6 mb-4">
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
                  </div> -->
                  <!--end col-->

                  <!-- <div class="col-lg-6 mb-4">
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
                  </div> -->
                  <!--end col-->

                  <!-- <div class="col-lg-6 mb-4">
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
                  </div> -->
                  <!--end col-->

                  <!-- <div class="col-lg-6 mb-4">
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
                  </div> -->
                  <!--end col-->

                  <!-- <div class="col-lg-6 mb-4">
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
                  </div> -->
                  <!--end col-->

               </div>
               <!--end row-->

               <div class="text-center mt-3 mb-4">
                  <a href="javascript:void(0);" class="text-success material-shadow-none"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Muat Lebih Banyak </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>