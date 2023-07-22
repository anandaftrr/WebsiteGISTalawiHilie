<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_umkm'];
$nama = $_POST['nama_umkm'];
$sosmed = $_POST['sosmed'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query(
    $koneksi,
    "update umkm set nama_umkm='$nama', sosmed='$sosmed', alamat='$alamat', latitude='$latitude', longitude='$longitude' where id_umkm='$id'"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_umkm.php');
