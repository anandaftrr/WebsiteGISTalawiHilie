<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_umkm'];

// menghapus data dari database
$query = mysqli_query($koneksi, "delete from umkm where id_umkm='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampildata_umkm.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampildata_umkm.php'</script>";
}
