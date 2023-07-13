<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_wisata'];

// menghapus data dari database
$query = mysqli_query($koneksi, "delete from wisata where id_wisata='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampildata_wisata.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampildata_wisata.php'</script>";
}
