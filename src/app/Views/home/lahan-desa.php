<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h4 class="card-title mb-0 me-auto">Penggunaan Lahan Desa</h4>
                    <div class="ms-auto mt-2 mt-lg-0">
                        <div class="btn-group dropend ms-0 ms-lg-2">
                            <button type="button" class="btn btn-outline-success dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-user-location-line"></i> Identifikasi Lahan
                            </button>
                            <ul class="dropdown-menu p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="TanahKasDesa" checked>
                                    <label class="form-check-label" for="TanahKasDesa">
                                        Tanah Kas Desa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="TanahDesa" checked>
                                    <label class="form-check-label" for="TanahDesa">
                                        Tanah di Desa
                                    </label>
                                </div>
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
        <!-- container-fluid -->
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
var leafletIconTanahKasDesa = L.divIcon({
    html: '<i class="ri-map-pin-user-line" style="font-size: 50px;"></i>',
    iconSize: [0, 0],
    iconAnchor: [22, 40],
    popupAnchor: [-3, -36]
});

// Icon untuk Tanah
var leafletIconTanahDesa = L.divIcon({
    html: '<i class="ri-map-pin-2-line" style="font-size: 50px;"></i>', // Anda dapat mengubah kelas ikon sesuai kebutuhan
    iconSize: [0, 0],
    iconAnchor: [22, 40],
    popupAnchor: [-3, -36]
});

// Tambahkan marker untuk Kantor Desa
var markerTanahKasDesa = L.marker([-6.987297244550035, 108.31677748931818], {
    icon: leafletIconTanahKasDesa
}).addTo(map); // Menambahkan marker di TanahKasDesa

// Tambahkan marker untuk Tanah
var markerTanahDesa = L.marker([-6.978772163242786, 108.31320484104683], {
    icon: leafletIconTanahDesa
}).addTo(map); // Menambahkan marker di Tanah

// PopUp Tanah Area
markerTanahKasDesa.bindPopup("<b> Tanah Kas Desa </b><br> Talagawetan").openPopup();

// PopUp KantorDesa Area
markerTanahDesa.bindPopup("<b> Tanah Desa </b><br> Talagawetan").openPopup();

// Event listener untuk checkbox Tanah
document.getElementById('TanahKasDesa').addEventListener('change', function() {
    if (this.checked) {
        markerTanahKasDesa.addTo(map);
    } else {
        map.removeLayer(markerTanahKasDesa);
    }
});

// Event listener untuk checkbox Kantor Desa
document.getElementById('TanahDesa').addEventListener('change', function() {
    if (this.checked) {
        markerTanahDesa.addTo(map);
    } else {
        map.removeLayer(markerTanahDesa);
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