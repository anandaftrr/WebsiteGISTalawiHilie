<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_kesehatan'];
$nama = $_POST['nama_kesehatan'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query(
    $koneksi,
    "update kesehatan set nama_kesehatan='$nama', alamat='$alamat', latitude='$latitude', longitude='$longitude' where id_kesehatan='$id'"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_kesehatan.php');
