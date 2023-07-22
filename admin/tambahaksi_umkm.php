<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_umkm'];
$sosmed = $_POST['sosmed'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query(
    $koneksi,
    "insert into umkm values('','$nama','$sosmed','$alamat','$latitude','$longitude')"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_umkm.php');
