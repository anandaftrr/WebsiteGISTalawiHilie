<?php include 'header.php'; ?>

<!-- start banner Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-left">
        <h6 class="text-white">SISTEM INFORMASI GEOGRAFIS</h6>
        <h1 class="text-white">TALAWI HILIE</h1>
        <p class="text-white">
        Aplikasi pemetaan geografis infrastruktur di Desa Talawi Hilie, Kecamatan Talawi, Kota Sawahlunto ini memuat informasi dan lokasi dari infrastruktur sekolah, kesehatan, rumah ibadah, juga instansi daerah yang berfungsi untuk memberikan kemudahan akses dan pengelanan wilayah geolokasi dari infrastruktur penting di Desa Talawi Hilie.
        </p>
        <a href="#peta_wisata" class="primary-btn text-uppercase">Lihat Detail</a>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->


<main id="main">




  <!-- Start about-info Area -->
  <section class="price-area section-gap">

    <section id="peta_wisata" class="about-info-area section-gap">
      <div class="container">


    <!-- Start price Area -->

      <!-- End other-issue Area -->

    </div>
    </div> 
    
    <!-- ======= Counts Section Sekolah ======= -->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-3">Jumlah Sekolah</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once 'countsma_sekolah.php';
          $obj = json_decode($data);
          $sman = '';
          foreach ($obj->results as $item) {
              $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once 'countsmk_sekolah.php';
          $obj2 = json_decode($data);
          $smkn = '';
          foreach ($obj2->results as $item2) {
              $smkn .= $item2->smk;
          }
          ?>


        </div>
        

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Counts Section Kesehatan ======= -->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">Jumlah Infrastruktur Kesehatan</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once 'countsma_kesehatan.php';
          $obj = json_decode($data);
          $sman = '';
          foreach ($obj->results as $item) {
              $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once 'countsmk_kesehatan.php';
          $obj2 = json_decode($data);
          $smkn = '';
          foreach ($obj2->results as $item2) {
              $smkn .= $item2->smk;
          }
          ?>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Counts Section Rumah Ibadah ======= -->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">Jumlah Rumah Ibadah</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once 'countsma_masjid.php';
          $obj = json_decode($data);
          $sman = '';
          foreach ($obj->results as $item) {
              $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once 'countsmk_masjid.php';
          $obj2 = json_decode($data);
          $smkn = '';
          foreach ($obj2->results as $item2) {
              $smkn .= $item2->smk;
          }
          ?>
        </div>
      </div>
    </section><!-- End Counts Section -->
    
    <!-- ======= Counts Section Instansi ======= -->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">Jumlah Instansi</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once 'countsma_instansi.php';
          $obj = json_decode($data);
          $sman = '';
          foreach ($obj->results as $item) {
              $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once 'countsmk_instansi.php';
          $obj2 = json_decode($data);
          $smkn = '';
          foreach ($obj2->results as $item2) {
              $smkn .= $item2->smk;
          }
          ?>
        </div>
      </div>
    </section><!-- End Counts Section -->
    
<!-- ======= Counts Section UMKM ======= -->
<section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">Jumlah UMKM</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once 'countsma_umkm.php';
          $obj = json_decode($data);
          $sman = '';
          foreach ($obj->results as $item) {
              $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once 'countsmk_umkm.php';
          $obj2 = json_decode($data);
          $smkn = '';
          foreach ($obj2->results as $item2) {
              $smkn .= $item2->smk;
          }
          ?>
        </div>
      </div>
    </section><!-- End Counts Section -->
    </div>
  </section>
  <!-- End testimonial Area -->


  <?php include 'footer.php'; ?>
