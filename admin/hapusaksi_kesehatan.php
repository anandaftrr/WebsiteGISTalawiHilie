<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_kesehatan'];

// menghapus data dari database
$query = mysqli_query(
    $koneksi,
    "delete from kesehatan where id_kesehatan='$id'"
);
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampildata_kesehatan.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampildata_kesehatan.php'</script>";
}
