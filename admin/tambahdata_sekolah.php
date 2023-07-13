<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'menu_sidebar.php'; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include 'menu_topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Lokasi Sekolah</h6>
                        </div>
                        <div class="card-body">

                            <!-- Main content -->
                            <form class="form-horizontal style-form" style="margin-top: 10px;" action="tambahaksi_sekolah.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
                                    <input name="nama_sekolah" type="text" class="form-control" id="nama_sekolah">
                                </div>  
                                <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" id="alamat">
                                </div>  
                                <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Akreditasi</label>
                                    <input name="akreditasi" type="text" class="form-control" id="akreditasi">
                                </div> 
                                <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Latitude</label>
                                    <input name="latitude" type="text" class="form-control" id="latitude">
                                </div>  
                                <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Longitude</label>
                                    <input name="longitude" type="text" class="form-control" id="longitude">
                                </div>  
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-4 control-label"></label>
                                    <div class="mb-3">
                                        <center><input type="submit" value="Simpan" class="btn btn-sm btn-primary" /></center>
                                    </div>
                                </div>
                                <div style="margin-top: 20px;"></div>
                            </form>


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include 'footer.php'; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>