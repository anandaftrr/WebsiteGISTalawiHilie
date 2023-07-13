<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_sekolah'];

// menghapus data dari database
$query = mysqli_query($koneksi, "delete from sekolah where id_sekolah='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampildata_sekolah.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampildata_sekolah.php'</script>";
}
