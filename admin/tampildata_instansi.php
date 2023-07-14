<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header('location:../tampildata_instansi.php?pesan=belum_login');
}
include '../koneksi.php';
?>

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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <center><h6 class="m-0 font-weight-bold text-primary">LOKASI INSTANSI TALAWI HILIE</h6></center>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr  align="center">
                                            <th>No.</th>
                                            <th>Nama Instansi</th>
                                            <th>Alamat</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $data = mysqli_query(
                                            $koneksi,
                                            'select * from instansi'
                                        );
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++; ?>
                                            <tr>
                                                <td  align="center"><?php echo $no; ?></td>
                                                <td><b><a href="detaildata_instansi.php?id_instansi=<?php echo $d[
                                                    'id_instansi'
                                                ]; ?> "> <?php echo $d[
     'nama_instansi'
 ]; ?> </a> </b></td>
                                                <td><?php echo $d[
                                                    'alamat'
                                                ]; ?></td>
                                                <td  align="center"><?php echo $d[
                                                    'latitude'
                                                ]; ?></td>
                                                <td  align="center"><?php echo $d[
                                                    'longitude'
                                                ]; ?></td>
                                                <td  align="center">
                                                    <a href="editdata_instansi.php?id_instansi=<?php echo $d[
                                                        'id_instansi'
                                                    ]; ?> " class="btn-sm btn-primary"><span class="fas fa-edit"></a>
                                                </td>
                                                <td  align="center">    
                                                    <a href="hapusaksi_instansi.php?id_instansi=<?php echo $d[
                                                        'id_instansi'
                                                    ]; ?>" class="btn-sm btn-danger"><span class="fas fa-trash"></a>
                                                </td>
                                            </tr>
                            </div>
                        <?php
                                        }
                                        ?>
                        </tbody>
                        </table>
                        <br><br>
                        <center><a href="tambahdata_instansi.php"><button class="btn btn-primary" type="button" href="tambahdata_instansi.php">Tambah Data</button></a></center>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

    </div>
    <!-- End of Page Wrapper -->