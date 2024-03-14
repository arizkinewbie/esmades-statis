<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h2 class="mb-0"><?= ucwords(str_replace('-', ' ', $content)) ?></h2>
                </div><!-- end card header -->
                <div class="card-body">
                    <h6 class="fs-15">Sejarah</h6>
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-2">
                            <p class="text-muted mb-0">
                                <?= $data[0]['sejarah'] ?>
                            </p>
                        </div>
                    </div>
                    <h6 class="fs-16 my-3">Visi</h6>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-2 ">
                            <p class="text-muted mb-0"><?= $data[0]['visi'] ?></p>
                        </div>
                    </div>
                    <h6 class="fs-16 my-3">Misi</h6>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-2 ">
                            <p class="text-muted mb-0"><?= $data[0]['misi'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>