<?php
// STATIS DATA! INGATKAN API UNTUK MENAMBAHKAN URL_SURAT
$api['informasi']['url_surat'] = 'https://jdih.batangkab.go.id/file/desa/surat-keputusan-kepala-desa-no-2-tentang-surat-keputusan-kepala-desa.pdf';
$api['informasi']['periode'] = '2020-2025';
?>

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
									<img src="<?= $api['informasi']['url_foto'] ?>" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow" alt="user-profile-image">
								</div>
								<h5 class="fs-16 mb-1"><?= $api['informasi']['nama'] ?></h5>
								<p class="text-muted mb-0"><?= $api['informasi']['periode'] ?></p>
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
									<input type="text" class="form-control bg-transparent" id="" disabled placeholder="<?= $api['informasi']['tempat_lahir'] ?>, <?= $api['informasi']['tanggal_lahir'] ?>">
								</div>
								<div class="mb-3">
									<label for="" class="form-label">Alamat:</label>
									<input type="text" class="form-control bg-transparent" id="" disabled placeholder="<?= $api['informasi']['alamat'] ?>">
								</div>
								<div class="mb-3">
									<label for="" class="form-label">Status Perkawinan:</label>
									<input type="text" class="form-control bg-transparent" id="" disabled placeholder="<?= $api['informasi']['status_perkawinan'] ?>">
								</div>
								<div class="mb-3">
									<label for="" class="form-label">No. Telepon:</label>
									<input type="text" class="form-control bg-transparent" id="" disabled placeholder="<?= $api['informasi']['telepon'] ?>">
								</div>
								<div class="mb-3">
									<label for="" class="form-label">Kewarganegaraan:</label>
									<input type="text" class="form-control bg-transparent" id="" disabled placeholder="<?= $api['informasi']['kewarganegaraan'] ?>">
								</div>
								<div class="mb-3">
									<label for="" class="form-label">Agama:</label>
									<input type="text" class="form-control bg-transparent" id="" disabled placeholder="<?= $api['informasi']['agama_nama'] ?>">
								</div>
							</form>
						</div>
					</div>
					<!-- end card -->
				</div>
				<!--end col-->
				<div class="col-xxl-9">
					<div class="card mt-xxl-n5">
						<div class="card-header">
							<ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-bs-toggle="tab" href="#riwayatPendidikan" role="tab">
										<i class="fas fa-home"></i> Riwayat Pendidikan
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#suratPengangkatan" role="tab">
										<i class="far fa-user"></i> Surat Keputusan Pengangkatan Kepala Desa
									</a>
								</li>
							</ul>
						</div>
						<div class="card-body p-4">
							<div class="tab-content">
								<div class="tab-pane active" id="riwayatPendidikan" role="tabpanel">
									<div class="profile-timeline">
										<div class="accordion accordion-flush" id="riwayat_Pendidikan">
											<?php foreach ($api['pendidikan'] as $key => $value): ?>
											<div class="accordion-item border-0">
												<div class="accordion-header" id="heading<?= $key + 1 ?>">
													<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse<?= $key + 1 ?>" aria-expanded="true">
														<div class="d-flex">
															<div class="flex-shrink-0 avatar-xs">
																<div class="avatar-title bg-light text-success rounded-circle material-shadow">
																	</div>
															</div>
															<div class="flex-grow-1 ms-3">
																<h6 class="fs-14 mb-1">
																	<?= $value['periode'] ?>
																</h6>
																<small class="text-muted"><?= $value['pendidikan'] ?></small>
															</div>
														</div>
													</a>
												</div>
												<div id="collapse<?= $key + 1 ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?= $key + 1 ?>" data-bs-parent="#riwayat_Pendidikan">
													<div class="accordion-body ms-2 ps-5">
                                                    ($value['keterangan']=>masih statis, tidak ada di API) Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolore sunt molestiae maiores adipisci veritatis sapiente est tenetur atque explicabo quibusdam, voluptates nobis. Eaque aliquid sit, quos facere magnam neque?
													</div>
												</div>
											</div>
											<?php endforeach ?>
											<!--end accordion-->
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane" id="suratPengangkatan" role="tabpanel">
									<div class="profile-timeline">
										<div class="accordion accordion-flush" id="surat_Pengangkatan">
											<div class="accordion-item border-0">
												<div id="collapseSuratPengangkatan" class="accordion-collapse collapse show" aria-labelledby="headingSuratPengangkatan" data-bs-parent="#surat_Pengangkatan">
													<div class="accordion-body ms-2 ps-2">
														<iframe src="<?= $api['informasi']['url_surat'] ?>" width="100%" height="600px"></iframe>
													</div>
												</div>
											</div>
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