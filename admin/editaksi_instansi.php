<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_instansi'];
$nama = $_POST['nama_instansi'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query(
    $koneksi,
    "update instansi set nama_instansi='$nama', alamat='$alamat', latitude='$latitude', longitude='$longitude' where id_instansi='$id'"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_instansi.php');
