<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Sarana dan Prasarana Desa</h4>
                    <!-- <div class="ms-auto mt-2 mt-lg-0">
                        <div class="btn-group dropend mb-0 mb-lg-0">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-global-line"></i> Layer Peta
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        OSM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        RBI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        ROAD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Areial
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Areial Label
                                    </label>
                                </div>
                            </ul>
                        </div>
                        <div class="btn-group dropend ms-0 ms-lg-2">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-user-location-line"></i> Golongan Desa
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tanah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor Desa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor KUD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor Kebudayaan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kantor Seni
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Gedung Olahraga
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div> -->
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
    const lat = -0.7893;
    const lng = 113.9213;

    var map = L.map('map').setView([lat, lng], 5); // Koordinat Indonesia: [-0.7893, 113.9213]

    // Mengambil API disini
    L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        maxZoom: 19,
    }).addTo(map);

    // Icon Marker
    var leafletIcon = L.icon({
        iconUrl: '<?= base_url('dist/') ?>assets/images/logo-sm.png',
        iconSize: [38, 40],
        iconAnchor: [22, 40],
        popupAnchor: [-3, -36]
    })

    // Edit marker daerah disini
    var markerJakarta = L.marker([-6.2088, 106.8456], {
        icon: leafletIcon
    }).addTo(map); // Menambahkan marker di Jakarta

    var markerBandung = L.marker([-6.9175, 107.6191], {
        icon: leafletIcon
    }).addTo(map); // Menambahkan marker di Bandung



    // PopUp Jakarta Area
    markerJakarta.bindPopup("<b> Jakarta </b><br> Ibu kota Indonesia").openPopup();

    // Garis Wilayah Jakarta
    var myGeoJSON = {
        "type": "FeatureCollection",
        "features": [{
            "type": "Feature",
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [106.97054245, -6.09329647],
                        [106.9695805, -6.15451342],
                        [106.97150448, -6.18607567],
                        [106.9541884, -6.22146142],
                        [106.94360637, -6.24058783],
                        [106.94072036, -6.25780102],
                        [106.90993615, -6.25684476],
                        [106.90512615, -6.27501364],
                        [106.90993615, -6.29509432],
                        [106.92148021, -6.30848106],
                        [106.91474623, -6.36584864],
                        [106.89646811, -6.37254106],
                        [106.87241796, -6.36298042],
                        [106.85413993, -6.34959509],
                        [106.84067181, -6.33716565],
                        [106.81758369, -6.35628779],
                        [106.7973816, -6.3610682],
                        [106.7973816, -6.33907787],
                        [106.80507769, -6.31517421],
                        [106.77814153, -6.3170866],
                        [106.77044552, -6.3610682],
                        [106.71945921, -6.35724391],
                        [106.68578908, -6.35819994],
                        [106.65500495, -6.36298042],
                        [106.64923293, -6.34290238],
                        [106.65981495, -6.31613041],
                        [106.65308089, -6.28935706],
                        [106.64923293, -6.26736368],
                        [106.64297988, -6.2420223],
                        [106.63672684, -6.2300684],
                        [106.61315773, -6.22528675],
                        [106.59968967, -6.20759432],
                        [106.5891076, -6.21954873],
                        [106.5674625, -6.21094158],
                        [106.55543744, -6.19946515],
                        [106.55255143, -6.18225005],
                        [106.58189257, -6.17077301],
                        [106.58814561, -6.15977395],
                        [106.61123372, -6.14255756],
                        [106.61556275, -6.12055802],
                        [106.63816984, -6.1066883],
                        [106.64490391, -6.1157754],
                        [106.67087803, -6.10334036],
                        [106.7103202, -6.09473133],
                        [106.72523129, -6.09042676],
                        [106.74110436, -6.10142726],
                        [106.78391356, -6.10764483],
                        [106.79690062, -6.09520963],
                        [106.8103687, -6.11816673],
                        [106.82872495, -6.1153166],
                        [106.83922885, -6.12103629],
                        [106.85654493, -6.10860138],
                        [106.87722805, -6.10334036],
                        [106.87674703, -6.09473133],
                        [106.91667021, -6.09903586],
                        [106.97054245, -6.09329647]
                    ]
                ]
            },
            "id": "2281dc87-cda2-45ab-811f-795e996f3d3a",
            "properties": {
                "name": "Jakarta"
            }
        }, {
            "type": "Feature",
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [106.61941075, -6.13155788],
                        [106.61941075, -6.13155788],
                        [106.61941075, -6.13155788],
                        [106.61941075, -6.13155788]
                    ]
                ]
            },
            "id": "0856cd8f-228e-4d43-9471-532821197879",
            "properties": {
                "name": ""
            }
        }]
    }

    L.geoJSON(myGeoJSON).addTo(map)
</script>