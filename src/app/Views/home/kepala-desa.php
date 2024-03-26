<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h2 class="mb-0">Kepala Desa</h2>
                </div>
            </div>


            <div class="row" style="margin-top: 60px">
                <div class="col-xxl-3">
                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="<?= base_url('dist/') ?>assets/images/menu/kepala-desa.jpg"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow"
                                        alt="user-profile-image">
                                </div>
                                <h5 class="fs-16 mb-1">$Nama</h5>
                                <p class="text-muted mb-0">Kepala Desa $kepala_desa</p>
                            </div>
                        </div>
                    </div>
                    <!--end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Profil</h5>
                                </div>
                            </div>
                            <form action="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tempat, Tanggal Lahir:</label>
                                    <input type="text" class="form-control bg-transparent" id="" disabled
                                        placeholder="$tempat_lahir, $tanggal_lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat:</label>
                                    <input type="text" class="form-control bg-transparent" id="" disabled
                                        placeholder="$alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Status Perkawinan:</label>
                                    <input type="text" class="form-control bg-transparent" id="" disabled
                                        placeholder="$status_perkawinan">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">No. Telepon:</label>
                                    <input type="text" class="form-control bg-transparent" id="" disabled
                                        placeholder="$no_telepon">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Kewarganegaraan:</label>
                                    <input type="text" class="form-control bg-transparent" id="" disabled
                                        placeholder="$kewarganegaraan">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Agama:</label>
                                    <input type="text" class="form-control bg-transparent" id="" disabled
                                        placeholder="$agama">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Profil</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="ps-0" scope="row">Tempat, Tanggal Lahir :</th>
                                            <td class="text-muted">Jakarta, 10 Juni 1966</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Alamat :</th>
                                            <td class="text-muted">JL. Juanda 1</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Status Perkawinan :</th>
                                            <td class="text-muted">Sudah Menikah</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">No. Telepon :</th>
                                            <td class="text-muted">089776524521
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Kewarganegaraan :</th>
                                            <td class="text-muted">WNI</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Agama :</th>
                                            <td class="text-muted">Islam</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#riwayatPendidikan"
                                        role="tab">
                                        <i class="fas fa-home"></i> Riwayat Pendidikan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#riwayatJabatan" role="tab">
                                        <i class="far fa-user"></i> Riwayat Jabatan
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="riwayatPendidikan" role="tabpanel">
                                    <div class="profile-timeline">
                                        <div class="accordion accordion-flush" id="riwayat_Pendidikan">
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingOne">
                                                    <a class="accordion-button p-2 shadow-none"
                                                        data-bs-toggle="collapse" href="#collapseOne"
                                                        aria-expanded="true">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-light text-success rounded-circle material-shadow">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-1">
                                                                    1990-1996
                                                                </h6>
                                                                <small class="text-muted">SD Talaga Wetan 1</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5">
                                                        In an awareness campaign, it is vital for people to begin put 2
                                                        and 2
                                                        together and begin to recognize your cause. Too much or too
                                                        little
                                                        spacing, as in the example below, can make things unpleasant for
                                                        the
                                                        reader. The goal is to make your text as comfortable to read as
                                                        possible. A wonderful serenity has taken possession of my entire
                                                        soul,
                                                        like these sweet mornings of spring which I enjoy with my whole
                                                        heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingTwo">
                                                    <a class="accordion-button p-2 shadow-none"
                                                        data-bs-toggle="collapse" href="#collapseTwo"
                                                        aria-expanded="false">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-light text-success rounded-circle material-shadow">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-1">
                                                                    1996-1999
                                                                </h6>
                                                                <small class="text-muted">SMPN Talaga 1</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5">
                                                        In an awareness campaign, it is vital for people to begin put 2
                                                        and 2
                                                        together and begin to recognize your cause. Too much or too
                                                        little
                                                        spacing, as in the example below, can make things unpleasant for
                                                        the
                                                        reader. The goal is to make your text as comfortable to read as
                                                        possible. A wonderful serenity has taken possession of my entire
                                                        soul,
                                                        like these sweet mornings of spring which I enjoy with my whole
                                                        heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingThree">
                                                    <a class="accordion-button p-2 shadow-none"
                                                        data-bs-toggle="collapse" href="#collapseThree"
                                                        aria-expanded="false">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-light text-success rounded-circle material-shadow">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-1">
                                                                    1999-2002
                                                                </h6>
                                                                <small class="text-muted">SMAN 1 Talaga</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5">
                                                        In an awareness campaign, it is vital for people to begin put 2
                                                        and 2
                                                        together and begin to recognize your cause. Too much or too
                                                        little
                                                        spacing, as in the example below, can make things unpleasant for
                                                        the
                                                        reader. The goal is to make your text as comfortable to read as
                                                        possible. A wonderful serenity has taken possession of my entire
                                                        soul,
                                                        like these sweet mornings of spring which I enjoy with my whole
                                                        heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingFour">
                                                    <a class="accordion-button p-2 shadow-none"
                                                        data-bs-toggle="collapse" href="#collapseFour"
                                                        aria-expanded="false">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-light text-success rounded-circle material-shadow">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-1">
                                                                    2002-2007
                                                                </h6>
                                                                <small class="text-muted">Universitas Majalengka</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseFour" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5">
                                                        In an awareness campaign, it is vital for people to begin put 2
                                                        and 2
                                                        together and begin to recognize your cause. Too much or too
                                                        little
                                                        spacing, as in the example below, can make things unpleasant for
                                                        the
                                                        reader. The goal is to make your text as comfortable to read as
                                                        possible. A wonderful serenity has taken possession of my entire
                                                        soul,
                                                        like these sweet mornings of spring which I enjoy with my whole
                                                        heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="riwayatJabatan" role="tabpanel">
                                    <div class="profile-timeline">
                                        <div class="accordion accordion-flush" id="riwayat_Jabatan">
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingFive">
                                                    <a class="accordion-button p-2 shadow-none"
                                                        data-bs-toggle="collapse" href="#collapseFive"
                                                        aria-expanded="true">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-light text-success rounded-circle material-shadow">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-1">
                                                                    2013
                                                                </h6>
                                                                <small class="text-muted">Menjabat Sebagai Gubernur Jawa
                                                                    Barat</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5">
                                                        In an awareness campaign, it is vital for people to begin put 2
                                                        and 2
                                                        together and begin to recognize your cause. Too much or too
                                                        little
                                                        spacing, as in the example below, can make things unpleasant for
                                                        the
                                                        reader. The goal is to make your text as comfortable to read as
                                                        possible. A wonderful serenity has taken possession of my entire
                                                        soul,
                                                        like these sweet mornings of spring which I enjoy with my whole
                                                        heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingSix">
                                                    <a class="accordion-button p-2 shadow-none"
                                                        data-bs-toggle="collapse" href="#collapseSix"
                                                        aria-expanded="false">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div
                                                                    class="avatar-title bg-light text-success rounded-circle material-shadow">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-1">
                                                                    2018
                                                                </h6>
                                                                <small class="text-muted">Menjabat Sebagai Gubernur Jawa
                                                                    Tengah</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseSix" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5">
                                                        In an awareness campaign, it is vital for people to begin put 2
                                                        and 2
                                                        together and begin to recognize your cause. Too much or too
                                                        little
                                                        spacing, as in the example below, can make things unpleasant for
                                                        the
                                                        reader. The goal is to make your text as comfortable to read as
                                                        possible. A wonderful serenity has taken possession of my entire
                                                        soul,
                                                        like these sweet mornings of spring which I enjoy with my whole
                                                        heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>