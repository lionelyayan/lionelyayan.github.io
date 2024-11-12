<?php
// include 'database/db_config.php';

// $result = mysqli_query($con, "SELECT * FROM portfolio ORDER BY id ASC");
// while ($row = mysqli_fetch_assoc($result)) {
//   $isLink = $row['link'] == '#portfolio' ? '"#portfolio"' : '"' . $row['link'] . '" target="_blank"';
//     echo '
//      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
//         <div class="portfolio-wrap">
//           <center style="background: ' . $row['background'] . ';">
//             <img src="' . $row['img'] . '" class="img-fluid" alt="">
//           </center>
//           <div class="portfolio-info">
//             <h4>' . $row['name'] . '</h4>
//             <p>' . $row['label'] . '</p>
//             <div class="portfolio-links">
//               <a href="portfolio-details.php?name=' . $row['name'] . '" title="More Details"><i class="bx bx-link"></i></a>
//             </div>
//           </div>
//         </div>
//       </div>
//     ';
// }

// $con->close();




echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/devert-tv.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Devert TV</h4>
        <p>Aplikasi TV Online yang dilengkapi dengan fitur custom M3U</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Devert TV" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/erpp.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Mobile ERPP</h4>
        <p>Aplikasi android untuk masyarakat Purwakarta agar dapat dengan mudah mendapatkan informasi terkait Pemilihan Umum</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Mobile ERPP" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/filter-resi.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Filter Resi</h4>
        <p>Aplikasi android untuk scan resi dan merekap hasil scan ke dalam excel</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Filter Resi" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/ocr-ktp.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>OCR KTP</h4>
        <p>Aplikasi android untuk memudahkan pencatatan KTP dengan otomatis menggunakan ML Kit</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=OCR KTP" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/imperium.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Imperium</h4>
        <p>Aplikasi android yang digunakan oleh member komunitas untuk berbagai transaksi token dan event</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Imperium" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/pdpb-kpu-purwakarta.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Simanggis PDPB</h4>
        <p>Aplikasi android masyarakat purwakarta untuk Pemutakhiran Data Pemilih Berkelanjutan</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Simanggis PDPB" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/sparklingua.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Sparklingua</h4>
        <p>Aplikasi android untuk pembelian paket les bahasa korea bagi murid, dan penjadwalan serta pembuatan sertifikat bagi admin</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Sparklingua" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';

echo '
  <div class="col-lg-3 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <center style="background:#ababab;">
        <img src="./assets/img/portfolio/ta-skripsi.png" class="img-fluid" alt="">
      </center>
      <div class="portfolio-info">
        <h4>Skripsi Android</h4>
        <p>Beberapa aplikasi android yang pernah saya buat untuk kebutuhan Tugas Akhir atau Skripsi</p>
        <div class="portfolio-links">
          <a href="portfolio-details.php?name=Skripsi Android" title="More Details"><i class="bx bx-folder-open"></i></a>
        </div>
      </div>
    </div>
  </div>
';