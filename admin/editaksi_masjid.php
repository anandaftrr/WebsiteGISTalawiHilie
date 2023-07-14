<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_masjid'];
$nama = $_POST['nama_masjid'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query(
    $koneksi,
    "update masjid set nama_masjid='$nama', alamat='$alamat', latitude='$latitude', longitude='$longitude' where id_masjid='$id'"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_masjid.php');
