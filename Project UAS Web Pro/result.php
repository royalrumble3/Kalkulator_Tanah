<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $luas = $_POST['luas'];
  $kota = $_POST['namakota'];
  $daerah = "";
  if ($_POST['namakota'] == '0') {
    $daerah = "Surabaya";
    $hargaTanah = 5000000;
    $hargaTanahFormat = "Rp. " . number_format($hargaTanah, 2, ",", ".");
    $hargaTotal = $luas * $hargaTanah;
    $hargaTotalFormat = "Rp. " . number_format($hargaTotal, 2, ",", ".");
  }
  if ($_POST['namakota'] == '1') {
    $daerah = "Surabaya";
    $hargaTanah = 5000000;
    $hargaAkhir = $luas * $hargaTanah;
  }
  if ($_POST['namakota'] == '2') {
    $daerah = "Surabaya";
    $hargaTanah = 5000000;
    $hargaAkhir = $luas * $hargaTanah;
  }
  if ($_POST['namakota'] == '3') {
    $daerah = "Surabaya";
    $hargaTanah = 5000000;
    $hargaAkhir = $luas * $hargaTanah;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- css prib -->
  <link rel="stylesheet" href="assets/style/hasil.css" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <nav>
    <div class="container-lg">
      <div class="box-nav">
        <div class="box">
          <img src="./assets/img/vecteezy_calculator-creative-icon-design_15961560.jpg" alt="" />
          <h1>Kelompok<span>03.</span></h1>
        </div>
        <div class="box">
          <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="aplikasi.html">Aplikasi</a></li>
            <li><a href="contact.php">Tentang Kami</a></li>
            <li><a href="contact.php">Artikel</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <section class="hero-app">
    <div class="container">
      <div class="box-app">
        <h2>Beranda > aplikasi perhitungan > hasil perhitungan</h2>
      </div>
      <h3>Hasil Perhitungan</h3>
    </div>
  </section>

  <section class="content-result">
    <div class="container">
      <div class="box-content">
        <div class="box-wrap">
          <div class="box">
            <h3>halo, <b><?= $nama ?></b> perhitungan mu selesai</h3>
          </div>
          <div class="box">
            <h3>kamu memilih tanah daerah <b><?= $daerah ?></b> dengan harga <b><?= $hargaTanahFormat ?></b></h3>
          </div>
          <div class="box">
            <h3>maka hasil perhitungan tanah mu dengan luas <b><?= $luas ?>m²</b> adalah <b><?= $hargaTotalFormat ?></b> </h3>
          </div>
        </div>
        <div class="box-map">
          <div class="map" id="map"></div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer">
      <p>© Group3WebPro | Rangga | Vira | Niko | Danila | Dino</p>
    </div>
  </footer>

  <script>
    function initMap() {
      // Daftar opsi kota dengan koordinatnya (latitude, longitude)
      var kotaOpsi = [{
          nama: "Surabaya",
          latitude: -7.2575,
          longitude: 112.7521
        }, {
          nama: "Malang",
          latitude: -7.9778,
          longitude: 112.6349
        },
        {
          nama: "Kediri",
          latitude: -7.8166,
          longitude: 112.0116
        },

        {
          nama: "Probolinggo",
          latitude: -7.7542,
          longitude: 113.2158
        },

        {
          nama: "Batu",
          latitude: -7.8675,
          longitude: 112.5239
        },
        {
          nama: "Pasuruan",
          latitude: -7.6449,
          longitude: 112.9061
        },
        {
          nama: "Blitar",
          latitude: -8.0981,
          longitude: 112.1686
        },
        {
          nama: "Madiun",
          latitude: -7.6298,
          longitude: 111.5237
        },
        {
          nama: "Mojokerto",
          latitude: -7.4729,
          longitude: 112.4333
        },
      ];

      // Inisialisasi peta
      var map = new google.maps.Map(document.getElementById("map"), {
        center: {
          lat: kotaOpsi[<?= (int) $kota ?>].latitude,
          lng: kotaOpsi[<?= (int) $kota ?>].longitude
        },
        zoom: 12,
      });

      // Tambahkan marker pada setiap lokasi kota
      kotaOpsi.forEach(function(kota) {
        var marker = new google.maps.Marker({
          position: {
            lat: kota.latitude,
            lng: kota.longitude
          },
          map: map,
          title: "Lokasi " + kota.nama,
        });
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrK9oiowsZvV_wUARn7rDog7gbhIJ4OMc&callback=initMap" async defer></script>
</body>

</html>