<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Berkah Rezeki</title>

  <!-- Bootstrap core CSS -->

  <link href="../FreeUser/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../freeuser/assets/css/fontawesome.css">
  <link rel="stylesheet" href="../freeuser/assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="../freeuser/assets/css/owl.css">
  <link rel="stylesheet" href="../freeuser/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <div style="height: 100px; display: flex;  overflow: hidden;" class="logo">
              <img src="<?= base_url('freeuser/assets/images/logooo.png') ?>" alt="" style="width: 400px; object-fit: cover; padding: 0px;">
            </div>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/FreeUser/index" class="active">Beranda</a></li>
              <li><a href="/FreeUser/tentangkami">Tentang Kami</a></li>
              <li><a href="/FreeUser/kontak">Kontak</a></li>
              <li><a href="kontak.html">Login</a></li>
              <li></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <h3>Beranda</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/foto2.jpg" alt="">
            <img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Batako terbaik &amp; berkualitas</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">

              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Tak tergoyahkan oleh waktu, batako kami tegar menjaga kestabilan rumah impian Anda. Bangun dengan keyakinan, bangun dengan batako berkualitas.
                  <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank"></a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>Batako<br><span>Batako Terbaik</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Transaksi<br><span>Aman terkendali</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| DETAIL BATAKO </h6>
            <h2>Informasi Tentang Batako</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($batako as $val) : ?>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="property-details.html"><img src="<?= base_url('uploads/' . esc($val['foto'])) ?>" alt=""></a>
              <span class="category"><?= $val['nama_batako'] ?></span>
              <h6><?= $val['harga'] ?></h6>
              <h4>Stok: <span><?= $val['stok'] ?></span></h4>
              <div class="main-button">
                <a href="property-details.html">Memesan</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../freeuser/vendor/jquery/jquery.min.js"></script>
  <script src="../freeuser/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../freeuser/assets/js/isotope.min.js"></script>
  <script src="../freeuser/assets/js/owl-carousel.js"></script>
  <script src="../freeuser/assets/js/counter.js"></script>
  <script src="../freeuser/assets/js/custom.js"></script>

</body>

</html>