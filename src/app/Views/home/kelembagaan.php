<?= view('home/layout/modal') ?>

<div class="container-fluid py-5 mx-2" style="padding-left: 15px; padding-right: 15px; margin-top: 45px;">
    <div class="row justify-content-center">
        <div class="col-lg-9 offset-lg-2 col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h2>Kelembagaan</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
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
                                    <a href="javascript:showModal('LPM')">
                                        <!--Ganti pada data-bs-target sesuaikan dengan id modal yang ingin dipanggil -->
                                        <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                            <img src="<?= base_url('dist/') ?>assets/images/lembaga/lpm.png" alt="" class="avatar-sm material-shadow">
                                        </div>
                                        <h5 class="fs-14 mb-1">LPM</h5>
                                    </a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="text-center">
                                        <a href="javascript:showModal('BUMDES')">
                                            <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                                <img src="<?= base_url('dist/') ?>assets/images/lembaga/bumdes.png" alt="" class="avatar-sm material-shadow">
                                            </div>
                                            <h5 class="fs-14 mb-1">BUMDES</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="text-center">
                                        <a href="javascript:showModal('PKK')">
                                            <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                                <img src="<?= base_url('dist/') ?>assets/images/lembaga/pkk.png" alt="" class="avatar-sm material-shadow">
                                            </div>
                                            <h5 class="fs-14 mb-1">PKK</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="text-center">
                                        <a href="javascript:showModal('Karang Taruna')">
                                            <div class="profile-user position-relative d-inline-block mx-auto mb-2 mt-3">
                                                <img src="<?= base_url('dist/') ?>assets/images/lembaga/karang-taruna.png" alt="" class="avatar-sm material-shadow">
                                            </div>
                                            <h5 class="fs-14 mb-1">Karang Taruna</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="text-center">
                                        <a href="javascript:showModal('Kader Posyandu')">
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