<?php include 'header.php'; ?>
<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Data Sekolah
        </h1>
        <p class="text-white link-nav">Halaman ini memuat informasi lokasi sekolah yang meliputi SD, SMP, SMA, dan SLB di Desa Talawi Hilie</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12 info-left">
        <img class="img-fluid" src="img/about/info-img.jpg" alt="">
      </div>
      <div class="col-lg-12 into-centers" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">

            </div>
            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="250%" cellspacing="0">
                                    <thead>
                                        <tr  align="center">
                                            <th width="10%">No.</th>
                                            <th width="30%">Nama Sekolah</th>
                                            <th width="30%">Alamat</th>
                                            <th width="10%">Akreditasi</th>
                                            <th width="20%">Lokasi</th>
                                        </tr>
</thead>
                <tbody>
                  <?php
                  $data = file_get_contents(
                      'http://localhost/WebsiteGISTalawiHilie/ambildata_sekolah.php'
                  );
                  $no = 1;
                  if (json_decode($data, true)) {
                      $obj = json_decode($data);
                      foreach ($obj->results as $item) { ?>
                      <tr>
                        <td  align="center"><?php echo $no; ?></td>
                        <td><?php echo $item->nama_sekolah; ?></td>
                        <td><?php echo $item->alamat; ?></td>
                        <td  align="center"><?php echo $item->akreditasi; ?></td>
                        <td class="ctr"  align="center">
                          <div class="btn-group">
                            <a href="detail_sekolah.php?id_sekolah=<?php echo $item->id_sekolah; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                              <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                          </div>
                        </td>
                      </tr>
                  <?php $no++;}
                  } else {
                      echo 'data tidak ada.';
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End about-info Area -->
<?php include 'footer.php'; ?>
