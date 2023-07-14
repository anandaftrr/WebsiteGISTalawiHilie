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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Lokasi Wisata</h6>
                        </div>
                        <div class="card-body">

                            <?php
                            include '../koneksi.php';
                            $id = $_GET['id_kesehatan'];
                            $query = mysqli_query(
                                $koneksi,
                                "select * from kesehatan where id_kesehatan='$id'"
                            );
                            $data = mysqli_fetch_array($query);
                            ?>

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" action="editaksi_kesehatan.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="mb-3"> 
                                        <label for="exampleFormControlInput1" class="form-label">ID Kesehatan</label>
                                        <div class="mb-3">
                                            <input name="id_kesehatan" type="text" id="id_kesehatan" class="form-control" value="<?php echo $data[
                                                'id_kesehatan'
                                            ]; ?>" readonly />
                                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        </div>
                                    </div>
                                    <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Nama Kesehatan</label>
                                        <div class="mb-3">
                                            <input name="nama_kesehatan" type="text" id="nama_kesehatan" class="form-control" value="<?php echo $data[
                                                'nama_kesehatan'
                                            ]; ?>" required />
                                        </div>
                                    </div>
                                    <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <div class="mb-3">
                                            <input name="alamat" class="form-control" id="alamat" type="text" value="<?php echo $data[
                                                'alamat'
                                            ]; ?>" required />
                                        </div>
                                    </div>
                                    <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Latitude</label>
                                        <div class="mb-3">
                                            <input name="latitude" class="form-control" id="latitude" type="text" value="<?php echo $data[
                                                'latitude'
                                            ]; ?>" required />
                                        </div>
                                    </div>
                                    <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Longitude</label>
                                        <div class="mb-3">
                                            <input name="longitude" class="form-control" id="longitude" type="text" value="<?php echo $data[
                                                'longitude'
                                            ]; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="mb-3">
                                        <center><input type="submit" value="Simpan" class="btn btn-sm btn-primary" /></center>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>

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