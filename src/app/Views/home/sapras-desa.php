<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Sarana dan Prasarana Desa</h4>
                    <!-- <div class="ms-auto mt-2 mt-lg-0">
                        <div class="btn-group dropend ms-0 ms-lg-2">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-user-location-line"></i> Jenis Sapras Desa
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexCheckDefault" id="flexCheckAlam" checked>
                                    <label class="form-check-label" for="flexCheckAlam">
                                        Alam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexCheckDefault" id="flexCheckBudaya" checked>
                                    <label class="form-check-label" for="flexCheckBudaya">
                                        Budaya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexCheckDefault" id="flexCheckSejarah" checked>
                                    <label class="form-check-label" for="flexCheckSejarah">
                                        Sejarah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexCheckDefault" id="flexCheckSaranaPrasarana">
                                    <label class="form-check-label" for="flexCheckSaranaPrasarana">
                                        Sarana dan Prasarana
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div> -->
                </div>

                <div class="card-body" style="height: 500px;">
                    <div id="map"></div>
                </div>
            </div><!-- end card -->

            <!-- Tampilan tabel -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail</h5>
                </div>
                <div class="card-body">
                    <table id="sarana-prasarana-table" class="table nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th class="w-30">Nama Sarana/Prasarana</th>
                                <th>Jenis</th>
                                <th>Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="sarana-prasarana-row-1">
                                <td>1</td>
                                <td>Puskesmas</td>
                                <td>Kesehatan</td>
                                <td>fasilitas lengkap dan siaga 24 jam</td>
                            </tr>
                            <tr id="sarana-prasarana-row-2">
                                <td>2</td>
                                <td>Sekolah Dasar Negeri</td>
                                <td>Pendidikan</td>
                                <td>SDN Telaga Ceria 1 akreditasi A</td>
                            </tr>
                            <tr id="sarana-prasarana-row-3">
                                <td>3</td>
                                <td>Pasar Desa Telaga</td>
                                <td>Perdagangan</td>
                                <td>Pasar tradisional yang buka setiap hari dari pukul 06.00 sampai 17.00</td>
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
const lat = -6.983464559152256; // Latitude desa Telagawetan
const lng = 108.31551443184851; // Longitude desa Telagawetan

var map = L.map('map').setView([lat, lng], 14); // Set zoom level ke 14 agar lebih dekat dengan desa Telagawetan

// Mengambil API disini
L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.maptiler.com/">Maptiler</a>',
    maxZoom: 19,
}).addTo(map);

// Data Sarana dan Prasarana Desa
var saranaPrasarana = [{
        nama: "Puskesmas Telaga Sehat",
        jenis: "Kesehatan",
        lat: -6.982772,
        lng: 108.312204,
        info: "Puskesmas dengan fasilitas lengkap dan siaga 24 jam"
    },
    {
        nama: "SDN Telaga Ceria 1",
        jenis: "Pendidikan",
        lat: -6.981672,
        lng: 108.314304,
        info: "Sekolah Dasar Negeri dengan akreditasi A"
    },
    {
        nama: "Pasar Desa Telaga",
        jenis: "Perdagangan",
        lat: -6.980572,
        lng: 108.315404,
        info: "Pasar tradisional yang buka setiap hari dari pukul 06.00 sampai 17.00"
    }
    // Tambahkan lebih banyak data sarana dan prasarana jika diperlukan
];

// Koordinat geometris untuk poligon wilayah Desa Talaga Wetan
var talagaWetanPolygon = {
    "type": "FeatureCollection",
    "features": [{
        "type": "Feature",
        "geometry": {
            "type": "LineString",
            "coordinates": [
                [108.3112577, -6.98967258],
                [108.31057576, -6.99019904],
                [108.30962861, -6.99063149],
                [108.3097991, -6.98959738],
                [108.3104621, -6.98976659],
                [108.31087884, -6.98907092],
                [108.31144713, -6.9889205],
                [108.31135241, -6.98811201],
                [108.31053787, -6.98673945],
                [108.31093567, -6.98623179],
                [108.31139906, -6.97635744]
            ]
        },
        "id": "a78ac226-d08a-4d05-a5e6-35e4271041bc",
        "properties": {
            "name": ""
        }
    }, {
        "type": "Feature",
        "geometry": {
            "type": "LineString",
            "coordinates": [
                [108.31139906, -6.97635744],
                [108.31139906, -6.97635744]
            ]
        },
        "id": "bc199441-ab30-4be4-a177-6bf16320af1d",
        "properties": {
            "name": "Talagawetan"
        }
    }, {
        "type": "Feature",
        "geometry": {
            "type": "LineString",
            "coordinates": [
                [108.31139906, -6.97635744],
                [108.31318822, -6.97662607],
                [108.31517284, -6.9765813],
                [108.31627039, -6.97716332],
                [108.31673052, -6.97789708],
                [108.31671859, -6.97942507],
                [108.31661119, -6.98062139],
                [108.31690952, -6.98095305],
                [108.31718682, -6.98139959],
                [108.31718682, -6.98521646],
                [108.31694056, -6.98651382],
                [108.32112694, -6.9889393],
                [108.32432829, -6.99134597],
                [108.31881591, -6.99294414],
                [108.31735731, -6.99221086],
                [108.31551985, -6.99318856],
                [108.3124511, -6.99307575],
                [108.31260264, -6.99175961],
                [108.31212907, -6.99102633],
                [108.3124511, -6.99046227],
                [108.31290573, -6.99036826],
                [108.31275419, -6.98989821],
                [108.31199647, -6.99008623],
                [108.3112577, -6.98967258]
            ]
        },
        "id": "670fff86-1e8e-4a3a-a3a2-f2e128c872d3",
        "properties": {
            "name": ""
        }
    }]
};

// Menambahkan poligon ke peta
L.geoJSON(talagaWetanPolygon, {
    style: function(feature) {
        return {
            color: "#3388ff",
            weight: 3
        };
    }
}).addTo(map);


// Fungsi untuk menampilkan marker Sarana dan Prasarana
function tampilkanSaranaPrasarana() {
    saranaPrasarana.forEach(function(item) {
        var icon;
        switch (item.jenis) {
            case 'Kesehatan':
                icon = L.divIcon({
                    html: '<i class="ri-hospital-line custom-icon" style="font-size: 24px; color: #FF5733;"></i>',
                    className: 'custom-icon',
                    iconAnchor: [12, 24],
                    popupAnchor: [0, -24]
                });
                break;
            case 'Pendidikan':
                icon = L.divIcon({
                    html: '<i class="ri-school-line custom-icon" style="font-size: 24px; color: #33FF8B;"></i>',
                    className: 'custom-icon',
                    iconAnchor: [12, 24],
                    popupAnchor: [0, -24]
                });
                break;
            case 'Perdagangan':
                icon = L.divIcon({
                    html: '<i class="ri-shopping-bag-line custom-icon" style="font-size: 24px; color: #336BFF;"></i>',
                    className: 'custom-icon',
                    iconAnchor: [12, 24],
                    popupAnchor: [0, -24]
                });
                break;
                // Tambahkan jenis lainnya jika diperlukan
            default:
                icon = L.divIcon({
                    html: '<i class="ri-map-pin-line custom-icon" style="font-size: 24px; color: #000;"></i>',
                    className: 'custom-icon',
                    iconAnchor: [12, 24],
                    popupAnchor: [0, -24]
                });
        }
        var marker = L.marker([item.lat, item.lng], {
            icon: icon
        }).addTo(map);
        marker.bindPopup(`<b>${item.nama}</b><br>${item.jenis}<br>${item.info}`);
    });
}

// Menampilkan Sarana dan Prasarana pada peta
tampilkanSaranaPrasarana();



// Fungsi untuk memperbarui atau memperbaharui tabel dengan data baru
function updateTable() {
    var tableData = [{
            nama: "Puskesmas Telaga Sehat",
            jenis: "Kesehatan",
            info: "Puskesmas dengan fasilitas lengkap dan siaga 24 jam"
        },
        {
            nama: "SDN Telaga Ceria 1",
            jenis: "Pendidikan",
            info: "Sekolah Dasar Negeri dengan akreditasi A"
        },
        // Tambahkan data sarana/prasarana lainnya sesuai dengan data di peta
    ];

    var table = $('#sarana-prasarana-table').DataTable();
    table.clear().draw(); // Menghapus semua data dari tabel

    // Menambahkan data baru ke dalam tabel
    tableData.forEach(function(item, index) {
        var rowData = [
            index + 1,
            item.nama,
            item.jenis,
            item.info
        ];
        table.row.add(rowData).node().id = 'sarana-prasarana-row-' + (index +
            1); // Menambahkan id unik ke setiap baris tabel
    });

    table.draw(); // Menggambar ulang tabel dengan data baru
}

// Memanggil fungsi untuk memperbarui atau memperbaharui tabel saat memuat halaman
$(document).ready(function() {
    updateTable();
});
</script>