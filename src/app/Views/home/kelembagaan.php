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

<div class="container-fluid py-5 mx-2" style="padding-left: 15px; padding-right: 15px; margin-top: 45px;">
   <div class="row justify-content-center">
      <div class="col-lg-9 offset-lg-2 col-md-10 offset-md-1">
         <div class="card">
            <div class="card-header">
               <h2>Kelembagaan</h2>
            </div>
            <div class="card-body">
               <div class="row justify-content-center">
                  <div class="col-md-6"> <!-- Sesuaikan ukuran kolom dengan kebutuhan -->
                     <div class="row">
                        <div class="col-md-4 text-center mb-4">
                           <a href="javascript:showModal('BPD')">
                              <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                 <img src="<?= base_url('dist/') ?>assets/images/lembaga/bpd.png" alt="" class="avatar-sm material-shadow">
                              </div>
                              <h5 class="fs-14 mb-1">BPD</h5>
                           </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                           <a href="javascript:showModalGalery()">
                              <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                 <img src="<?= base_url('dist/') ?>assets/images/lembaga/lpm.png" alt="" class="avatar-sm material-shadow">
                              </div>
                              <h5 class="fs-14 mb-1">LPM</h5>
                           </a>
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
               </div>
            </div>
         </div>
      </div>
   </div>
</div>