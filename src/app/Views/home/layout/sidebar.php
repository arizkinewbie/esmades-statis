<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box bg-success">
        <a href="<?= base_url('') ?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?= base_url('dist/') ?>assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= base_url('dist/') ?>assets/images/logo-dark.png" class="mt-2 mb-2" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu" class="mt-2 d-flex flex-wrap justify-content-center">
                <a href="<?= base_url('profil') ?>" class="card-body text-center">
                    <div class="mx-auto">
                        <img src="<?= base_url('dist/') ?>assets/images/logo_desa_talaga.png" alt="" width="50px" class="img-thumbnail rounded-circle shadow-none">
                    </div>
                    <p class="text-light mt-0">Profil Desa <?= $data[0]['nama'] ?></p>
                </a>

                <a href="<?= base_url('kepala-desa') ?>" class="card-body text-center" style="flex:0 0 50%;">
                    <div class="mx-auto">
                        <img src="<?= base_url('dist/') ?>assets/images/menu/kepala-desa.jpg" alt="" width="50px" class="img-thumbnail rounded-circle shadow-none">
                    </div>
                    <p class="text-light mt-0">Kepala Desa</p>
                </a>


                <a href="<?= base_url('struktur-organisasi') ?>" class="card-body text-center" style="flex:0 0 50%;">
                    <div class="mx-auto">
                        <img src="<?= base_url('dist/') ?>assets/images/menu/struktur-organisasi.jpg" alt="" width="50px" class="img-thumbnail rounded-circle shadow-none">
                    </div>
                    <p class="text-light mt-0">Struktur Organisasi Desa</p>
                </a>

                <a href="<?= base_url('kelembagaan') ?>" class="card-body text-center" style="flex:0 0 50%;">
                    <div class="mx-auto">
                        <img src="<?= base_url('dist/') ?>assets/images/menu/kelembagaan.jpg" alt="" width="50px" class="img-thumbnail rounded-circle shadow-none">
                    </div>
                    <p class="text-light mt-0">Kelembagaan</p>
                </a>

                <a href="<?= base_url('galeri') ?>" class="card-body text-center" style="flex:0 0 50%;">
                    <div class="mx-auto">
                        <img src="<?= base_url('dist/') ?>assets/images/menu/galeri.jpg" alt="" width="50px" class="img-thumbnail rounded-circle shadow-none">
                    </div>
                    <p class="text-light mt-0">Galeri</p>
                </a>

                <a href="<?= base_url('kabar-desa') ?>" class="card-body text-center" style="flex:0 0 50%;">
                    <div class="mx-auto">
                        <img src="<?= base_url('dist/') ?>assets/images/menu/kabar-desa.jpg" alt="" width="50px" class="img-thumbnail rounded-circle shadow-none">
                    </div>
                    <p class="text-light mt-0">Kabar Desa</p>
                </a>
            </div>

            <ul class="navbar-nav" id="navbar-nav">
                <!-- Peta Desa -->
                <li class="menu-title"><span data-key="t-menu">Peta Desa</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url('aset-desa') ?>" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-home-3-line"></i> <span data-key="t-layouts">Aset Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url('lahan-desa') ?>" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-flood-line"></i> <span data-key="t-layouts">Penggunaan Lahan Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url('sapras-desa') ?>" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-earth-line"></i> <span data-key="t-layouts">Sarana dan Prasarana Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url('objek-wisata') ?>" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-ship-2-line"></i> <span data-key="t-layouts">Informasi Potensi Wisata Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url('kependudukan') ?>" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-map-pin-user-line"></i> <span data-key="t-layouts">Sebaran Penduduk</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Baru</span>
                    </a>
                </li>

                <!-- Rekapitulasi Desa -->
                <li class="menu-title"><span data-key="t-menu">Rekapitulasi Data</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url('peraturan-desa') ?>" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-ship-2-line"></i> <span data-key="t-layouts">Peraturan/Keputusan Desa</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>