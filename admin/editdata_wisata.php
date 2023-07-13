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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Lokasi Wisata</h6>
                        </div>
                        <div class="card-body">

                            <?php
                            include '../koneksi.php';
                            $id = $_GET['id_wisata'];
                            $query = mysqli_query(
                                $koneksi,
                                "select * from wisata where id_wisata='$id'"
                            );
                            $data = mysqli_fetch_array($query);
                            ?>

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="mb-3"> 
                                        <label for="exampleFormControlInput1" class="form-label">ID Wisata</label>
                                        <div class="mb-3">
                                            <input name="id_wisata" type="text" id="id_wisata" class="form-control" value="<?php echo $data[
                                                'id_wisata'
                                            ]; ?>" readonly />
                                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        </div>
                                    </div>
                                    <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Nama Wisata</label>
                                        <div class="mb-3">
                                            <input name="nama_wisata" type="text" id="nama_wisata" class="form-control" value="<?php echo $data[
                                                'nama_wisata'
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
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <div class="mb-3">
                                            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" type="text"> <?php echo $data[
                                                'deskripsi'
                                            ]; ?> </textarea>
                                        </div>
                                        <div class="mb-3"> 
                                    <label for="exampleFormControlInput1" class="form-label">Harga Tiket</label>
                                        <div class="mb-3">
                                            <input name="harga_tiket" class="form-control" type="text" id="harga_tiket" type="text" value="<?php echo $data[
                                                'harga_tiket'
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
                                        <div class="col-sm-8">
                                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
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