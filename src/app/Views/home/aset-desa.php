<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Aset Desa</h4>
                    <div class="ms-auto mt-2 mt-lg-0">
                        <!-- <div class="btn-group dropend mb-0 mb-lg-0">
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
                        </div> -->
                        <div class="btn-group dropend ms-0 ms-lg-2">
                            <button type="button" class="btn btn-outline-success dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-user-location-line"></i> Golongan Desa
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Tanah" checked>
                                    <label class="form-check-label" for="Tanah">
                                        Tanah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="KantorDesa" checked>
                                    <label class="form-check-label" for="KantorDesa">
                                        Kantor Desa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="KantorKUD" checked>
                                    <label class="form-check-label" for="KantorKUD">
                                        Kantor KUD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="KantorKebudayaan"
                                        checked>
                                    <label class="form-check-label" for="KantorKebudayaan">
                                        Kantor Kebudayaan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="KantorSeni" checked>
                                    <label class="form-check-label" for="KantorSeni">
                                        Kantor Seni
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="GedungOlahraga"
                                        checked>
                                    <label class="form-check-label" for="GedungOlahraga">
                                        Gedung Olahraga
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body" style="height: 520px;">
                    <div id="map"></div>
                </div>
            </div>

            <!-- Tampilan tabel -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail</h5>
                </div>
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th class="w-30">Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Register</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Laptop ASUS</td>
                                <td>3070102</td>
                                <td>3070102 | 00001</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kantor Desa</td>
                                <td>3070102</td>
                                <td>3070102 | 00001</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const lat = -6.983464559152256; // Latitude desa Telagawetan
const lng = 108.31551443184851; // Longitude desa Telagawetan

var map = L.map('map').setView([lat, lng], 14); // Set zoom level ke 14 agar lebih dekat dengan desa Telagawetan


// Mengambil API disini
L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=g4CmBorxbBmnxsUejbeq', {
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    maxZoom: 19,
}).addTo(map);

// Icon untuk Kantor Desa
var leafletIconKantorDesa = L.divIcon({
    html: '<i class="ri-community-line custom-icon" style="font-size: 24px;"></i>',
    className: 'custom-icon',
    iconAnchor: [12, 24],
    popupAnchor: [0, -24]
});

// Icon untuk Tanah
var leafletIconTanah = L.divIcon({
    html: '<i class="ri-blaze-line custom-icon" style="font-size: 24px;"></i>', // Anda dapat mengubah kelas ikon sesuai kebutuhan
    className: 'custom-icon',
    iconAnchor: [12, 24],
    popupAnchor: [0, -24]
});

// Icon untuk Kantor KUD
var leafletIconKantorKUD = L.divIcon({
    html: '<i class="ri-building-4-line custom-icon" style="font-size: 24px;"></i>', // Anda dapat mengubah kelas ikon sesuai kebutuhan
    className: 'custom-icon',
    iconAnchor: [12, 24],
    popupAnchor: [0, -24]
});

// Icon untuk Kantor Kebudayaan
var leafletIconKantorKebudayaan = L.divIcon({
    html: '<i class="ri-ancient-pavilion-line custom-icon" style="font-size: 24px;"></i>', // Anda dapat mengubah kelas ikon sesuai kebutuhan
    className: 'custom-icon',
    iconAnchor: [12, 24],
    popupAnchor: [0, -24]
});

// Icon untuk Kantor Seni
var leafletIconKantorSeni = L.divIcon({
    html: '<i class="ri-gallery-line custom-icon" style="font-size: 24px;"></i>', // Anda dapat mengubah kelas ikon sesuai kebutuhan
    className: 'custom-icon',
    iconAnchor: [12, 24],
    popupAnchor: [0, -24]
});

// Icon untuk Gedung Olahraga
var leafletIconGedungOlahraga = L.divIcon({
    html: '<i class="ri-run-line custom-icon" style="font-size: 24px;"></i>', // Anda dapat mengubah kelas ikon sesuai kebutuhan
    className: 'custom-icon',
    iconAnchor: [22, 40],
    popupAnchor: [-3, -36]
});

// Tambahkan marker untuk Kantor Desa
var markerKantorDesa = L.marker([-6.987297244550035, 108.31677748931818], {
    icon: leafletIconKantorDesa
}).addTo(map); // Menambahkan marker di KantorDesa

// Tambahkan marker untuk Tanah
var markerTanah = L.marker([-6.978772163242786, 108.31320484104683], {
    icon: leafletIconTanah
}).addTo(map); // Menambahkan marker di Tanah

// Tambahkan marker untuk KantorKUD
var markerKantorKUD = L.marker([-6.986186843601615, 108.31165308472696], {
    icon: leafletIconKantorKUD
}).addTo(map); // Menambahkan marker di KantorKUD

// Tambahkan marker untuk KantorKebudayaan
var markerKantorKebudayaan = L.marker([-6.984252590490897, 108.31367397667842], {
    icon: leafletIconKantorKebudayaan
}).addTo(map); // Menambahkan marker di KantorKebudayaan

// Tambahkan marker untuk KantorSeni
var markerKantorSeni = L.marker([-6.984574966564924, 108.31865403184456], {
    icon: leafletIconKantorSeni
}).addTo(map); // Menambahkan marker di KantorSeni

// Tambahkan marker untuk GedungOlahraga
var markerGedungOlahraga = L.marker([-6.978091582829884, 108.31154482265812], {
    icon: leafletIconGedungOlahraga
}).addTo(map); // Menambahkan marker di GedungOlahraga

// PopUp Tanah Area
markerTanah.bindPopup("<b> Tanah </b><br> Talagawetan").openPopup();

// PopUp KantorDesa Area
markerKantorDesa.bindPopup("<b> Kantor Desa </b><br> Talagawetan").openPopup();

// PopUp KantorKUD Area
markerKantorKUD.bindPopup("<b> Kantor KUD </b><br> Talagawetan").openPopup();

// PopUp KantorKebudayaan Area
markerKantorKebudayaan.bindPopup("<b> Kantor Kebudayaan </b><br> Talagawetan").openPopup();

// PopUp KantorSeni Area
markerKantorSeni.bindPopup("<b> Kantor Seni </b><br> Talagawetan").openPopup();

// PopUp GedungOlahraga Area
markerGedungOlahraga.bindPopup("<b> Kantor Olahraga </b><br> Talagawetan").openPopup();

// Event listener untuk checkbox Tanah
document.getElementById('Tanah').addEventListener('change', function() {
    if (this.checked) {
        markerTanah.addTo(map);
    } else {
        map.removeLayer(markerTanah);
    }
});

// Event listener untuk checkbox Kantor Desa
document.getElementById('KantorDesa').addEventListener('change', function() {
    if (this.checked) {
        markerKantorDesa.addTo(map);
    } else {
        map.removeLayer(markerKantorDesa);
    }
});

// Event listener untuk checkbox KantorKUD
document.getElementById('KantorKUD').addEventListener('change', function() {
    if (this.checked) {
        markerKantorKUD.addTo(map);
    } else {
        map.removeLayer(markerKantorKUD);
    }
});

// Event listener untuk checkbox KantorKebudayaan
document.getElementById('KantorKebudayaan').addEventListener('change', function() {
    if (this.checked) {
        markerKantorKebudayaan.addTo(map);
    } else {
        map.removeLayer(markerKantorKebudayaan);
    }
});

// Event listener untuk checkbox KantorSeni
document.getElementById('KantorSeni').addEventListener('change', function() {
    if (this.checked) {
        markerKantorSeni.addTo(map);
    } else {
        map.removeLayer(markerKantorSeni);
    }
});

// Event listener untuk checkbox GedungOlahraga
document.getElementById('GedungOlahraga').addEventListener('change', function() {
    if (this.checked) {
        markerGedungOlahraga.addTo(map);
    } else {
        map.removeLayer(markerGedungOlahraga);
    }
});


var myGeoJSONTalaga = {
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
}

L.geoJSON(myGeoJSONTalaga).addTo(map)
</script>