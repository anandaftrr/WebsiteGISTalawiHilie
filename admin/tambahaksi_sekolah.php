<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_sekolah'];
$alamat = $_POST['alamat'];
$akreditasi = $_POST['akreditasi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query(
    $koneksi,
    "insert into sekolah values('','$nama','$alamat','$akreditasi','$latitude','$longitude')"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_sekolah.php');
