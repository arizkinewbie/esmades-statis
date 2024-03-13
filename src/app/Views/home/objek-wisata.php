<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Informasi Potensi Wisata Desa</h4>
                    <div class="ms-auto mt-2 mt-lg-0">
                        <div class="btn-group dropend mb-0 mb-lg-0">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-global-line"></i> jenis wisata
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioSemua" checked>
                                    <label class="form-check-label" for="flexRadioSemua">
                                        Semua
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Alam">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Alam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Budaya">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Budaya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Sejarah">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Sejarah
                                    </label>
                                </div>
                                <!-- Tambahkan jenis wisata lainnya jika diperlukan -->
                            </ul>

                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body" style="height: 500px;">
                    <div id="map"></div>
                </div>
            </div><!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Scroll - Horizontal</h5>
                </div>
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th>SR No.</th>
                                <th>ID</th>
                                <th>Purchase ID</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Assigned To</th>
                                <th>Created By</th>
                                <th>Create Date</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>01</td>
                                <td>VLZ-452</td>
                                <td>VLZ1400087402</td>
                                <td><a href="#!">Post launch reminder/ post list</a></td>
                                <td>Joseph Parker</td>
                                <td>Alexis Clarke</td>
                                <td>Joseph Parker</td>
                                <td>03 Oct, 2021</td>
                                <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>02</td>
                                <td>VLZ-453</td>
                                <td>VLZ1400087425</td>
                                <td><a href="#!">Additional Calendar</a></td>
                                <td>Diana Kohler</td>
                                <td>Admin</td>
                                <td>Mary Rucker</td>
                                <td>05 Oct, 2021</td>
                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>03</td>
                                <td>VLZ-454</td>
                                <td>VLZ1400087438</td>
                                <td><a href="#!">Make a creating an account profile</a></td>
                                <td>Tonya Noble</td>
                                <td>Admin</td>
                                <td>Tonya Noble</td>
                                <td>27 April, 2022</td>
                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>04</td>
                                <td>VLZ-455</td>
                                <td>VLZ1400087748</td>
                                <td><a href="#!">Apologize for shopping Error!</a></td>
                                <td>Joseph Parker</td>
                                <td>Alexis Clarke</td>
                                <td>Joseph Parker</td>
                                <td>14 June, 2021</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>05</td>
                                <td>VLZ-456</td>
                                <td>VLZ1400087547</td>
                                <td><a href="#!">Support for theme</a></td>
                                <td>Donald Palmer</td>
                                <td>Admin</td>
                                <td>Donald Palmer</td>
                                <td>25 June, 2021</td>
                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>06</td>
                                <td>VLZ-457</td>
                                <td>VLZ1400087245</td>
                                <td><a href="#!">Benner design for FB & Twitter</a></td>
                                <td>Mary Rucker</td>
                                <td>Jennifer Carter</td>
                                <td>Mary Rucker</td>
                                <td>14 Aug, 2021</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>07</td>
                                <td>VLZ-458</td>
                                <td>VLZ1400087785</td>
                                <td><a href="#!">Change email option process</a></td>
                                <td>James Morris</td>
                                <td>Admin</td>
                                <td>James Morris</td>
                                <td>12 March, 2022</td>
                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>08</td>
                                <td>VLZ-460</td>
                                <td>VLZ1400087745</td>
                                <td><a href="#!">Support for theme</a></td>
                                <td>Nathan Cole</td>
                                <td>Nancy Martino</td>
                                <td>Nathan Cole</td>
                                <td>28 Feb, 2022</td>
                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>09</td>
                                <td>VLZ-461</td>
                                <td>VLZ1400087179</td>
                                <td><a href="#!">Form submit issue</a></td>
                                <td>Grace Coles</td>
                                <td>Admin</td>
                                <td>Grace Coles</td>
                                <td>07 Jan, 2022</td>
                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>10</td>
                                <td>VLZ-462</td>
                                <td>VLZ140008856</td>
                                <td><a href="#!">Edit customer testimonial</a></td>
                                <td>Freda</td>
                                <td>Alexis Clarke</td>
                                <td>Freda</td>
                                <td>16 Aug, 2021</td>
                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>11</td>
                                <td>VLZ-463</td>
                                <td>VLZ1400078031</td>
                                <td><a href="#!">Ca i have an e-copy invoice</a></td>
                                <td>Williams</td>
                                <td>Admin</td>
                                <td>Williams</td>
                                <td>24 Feb, 2022</td>
                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>12</td>
                                <td>VLZ-464</td>
                                <td>VLZ1400087416</td>
                                <td><a href="#!">Brand logo design</a></td>
                                <td>Richard V.</td>
                                <td>Admin</td>
                                <td>Richard V.</td>
                                <td>16 March, 2021</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>13</td>
                                <td>VLZ-466</td>
                                <td>VLZ1400089015</td>
                                <td><a href="#!">Issue with finding information about order ?</a></td>
                                <td>Olive Gunther</td>
                                <td>Alexis Clarke</td>
                                <td>Schaefer</td>
                                <td>32 March, 2022</td>
                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>14</td>
                                <td>VLZ-467</td>
                                <td>VLZ1400090324</td>
                                <td><a href="#!">Make a creating an account profile</a></td>
                                <td>Edwin</td>
                                <td>Admin</td>
                                <td>Edwin</td>
                                <td>05 April, 2022</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
</div>

<script>
    const lat = -6.7860; // Latitude untuk Desa Talaga Wetan
    const lng = 107.6422; // Longitude untuk Desa Talaga Wetan
    var map = L.map('map').setView([lat, lng], 13); // Set view ke Desa Talaga Wetan dengan zoom yang lebih dekat

    // Mengambil API disini
    L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.maptiler.com/">Maptiler</a>',
        maxZoom: 19,
    }).addTo(map);

    // Icon Marker menggunakan Font Awesome
    var leafletIcon = {
        'Alam': L.divIcon({
            iconUrl: '<?= base_url('dist/') ?>assets/images/logo-sm.png',
            iconSize: [38, 40],
            iconAnchor: [22, 40],
            popupAnchor: [-3, -36]
        }),
        'Budaya': L.divIcon({
            iconUrl: '<?= base_url('dist/') ?>assets/images/logo-sm.png',
            iconSize: [38, 40],
            iconAnchor: [22, 40],
            popupAnchor: [-3, -36]
        }),
        'Sejarah': L.divIcon({
            iconUrl: '<?= base_url('dist/') ?>assets/images/logo-sm.png',
            iconSize: [38, 40],
            iconAnchor: [22, 40],
            popupAnchor: [-3, -36]
        }),
        // Tambahkan ikon lain sesuai jenis wisata yang ada
    };

    // Data Tempat Wisata di Desa Talaga Wetan
    var tempatWisata = [{
            lat: -6.7800,
            lng: 107.6380,
            jenis: 'Alam',
            info: 'Air Terjun Talaga Wetan'
        },
        {
            lat: -6.7850,
            lng: 107.6425,
            jenis: 'Budaya',
            info: 'Candi Cangkuang'
        },
        {
            lat: -6.7880,
            lng: 107.6445,
            jenis: 'Sejarah',
            info: 'Benteng Van Der Wijck'
        }
        // Tambahkan data lain jika ada
    ];

    // Fungsi untuk menampilkan marker
    function tampilkanMarker(jenis) {
        // Hapus semua marker sebelumnya
        map.eachLayer(function(layer) {
            if (layer instanceof L.Marker) { // Hanya hapus jika layer adalah instance dari L.Marker
                map.removeLayer(layer);
            }
        });

        // Menampilkan kembali base layer
        L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.maptiler.com/">Maptiler</a>',
            maxZoom: 19,
        }).addTo(map);

        // Filter dan tampilkan marker berdasarkan jenis
        tempatWisata.filter(function(item) {
            return item.jenis === jenis;
        }).forEach(function(item) {
            var marker = L.marker([item.lat, item.lng], {
                icon: leafletIcon[item.jenis]
            }).addTo(map); // Pastikan icon ditambahkan
            marker.bindPopup(item.info);
        });
    }

    // Koordinat geometris untuk poligon wilayah Desa Talaga Wetan
    var talagaWetanPolygon = {
        "type": "Feature",
        "properties": {
            "name": "Desa Talaga Wetan"
        },
        "geometry": {
            "type": "Polygon",
            "coordinates": [
                [
                    [107.647294, -6.786601],
                    [107.647857, -6.784999],
                    [107.648837, -6.783676],
                    [107.650570, -6.782958],
                    [107.652675, -6.783371],
                    [107.653454, -6.783747],
                    [107.654069, -6.784856],
                    [107.654998, -6.785124],
                    [107.657246, -6.786028],
                    [107.658704, -6.786121],
                    [107.659833, -6.785648],
                    [107.661697, -6.784369],
                    [107.663605, -6.783300],
                    [107.663935, -6.782253],
                    [107.664713, -6.781481],
                    [107.666214, -6.780881],
                    [107.666836, -6.780755],
                    [107.668774, -6.780835],
                    [107.669361, -6.780331],
                    [107.670133, -6.779424],
                    [107.671761, -6.779791],
                    [107.671875, -6.780634],
                    [107.672693, -6.781490],
                    [107.673569, -6.781634],
                    [107.674623, -6.782424],
                    [107.675254, -6.782538],
                    [107.675686, -6.783375],
                    [107.676641, -6.783988],
                    [107.676521, -6.784587],
                    [107.676370, -6.785342],
                    [107.675801, -6.785827],
                    [107.676643, -6.786408],
                    [107.676501, -6.786988],
                    [107.675962, -6.787396],
                    [107.674801, -6.787693],
                    [107.674401, -6.788466],
                    [107.673553, -6.788942],
                    [107.672924, -6.788563],
                    [107.672504, -6.788111],
                    [107.672032, -6.787591],
                    [107.671147, -6.787319],
                    [107.670233, -6.786730],
                    [107.669166, -6.787078],
                    [107.667964, -6.786689],
                    [107.666766, -6.786634],
                    [107.665404, -6.787041],
                    [107.663865, -6.787763],
                    [107.663131, -6.788601],
                    [107.662655, -6.789276],
                    [107.661550, -6.789552],
                    [107.659904, -6.789634],
                    [107.658417, -6.789449],
                    [107.656767, -6.789541],
                    [107.656219, -6.789019],
                    [107.655437, -6.788404],
                    [107.654365, -6.787490],
                    [107.652636, -6.786859],
                    [107.651601, -6.786866],
                    [107.650809, -6.786658],
                    [107.649780, -6.786779],
                    [107.649121, -6.787148],
                    [107.648702, -6.787620],
                    [107.648192, -6.787388],
                    [107.647294, -6.786601]
                ]
            ]
        }
    };

    // Menambahkan poligon ke peta
    L.geoJSON(talagaWetanPolygon, {
        style: function(feature) {
            return {
                color: "#3388ff",
                weight: 1
            };
        }
    }).addTo(map);


    // Listener untuk radio button
    document.querySelectorAll('input[name="flexRadioDefault"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            tampilkanMarker(this.nextElementSibling.textContent.trim()); // Pastikan teks di trim untuk menghilangkan spasi berlebih
        });
    });

    // Inisialisasi filter
    // tampilkanMarker('Alam'); // Menampilkan marker jenis Alam secara default

    // Fungsi untuk menampilkan marker
    function tampilkanMarker(jenis) {
        // Hapus semua marker sebelumnya
        map.eachLayer(function(layer) {
            if (layer instanceof L.Marker) { // Hanya hapus jika layer adalah instance dari L.Marker
                map.removeLayer(layer);
            }
        });

        // Menampilkan kembali base layer
        L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.maptiler.com/">Maptiler</a>',
            maxZoom: 19,
        }).addTo(map);

        var wisataFiltered = jenis === 'Semua' ? tempatWisata : tempatWisata.filter(item => item.jenis === jenis);

        // Menampilkan marker
        wisataFiltered.forEach(function(item) {
            var marker = L.marker([item.lat, item.lng], {
                icon: leafletIcon[item.jenis]
            }).addTo(map); // Pastikan icon ditambahkan
            marker.bindPopup(item.info);
        });
    }

    // Listener untuk radio button
    document.querySelectorAll('input[name="flexRadioDefault"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var jenis = this.nextElementSibling.textContent.trim();
            tampilkanMarker(jenis); // Update untuk menyesuaikan dengan pemilihan semua jenis wisata
        });
    });

    // Inisialisasi dengan menampilkan semua jenis wisata
    tampilkanMarker('Semua'); // Menampilkan semua jenis wisata sebagai default
</script>