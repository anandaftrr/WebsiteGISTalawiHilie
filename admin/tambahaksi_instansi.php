<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_instansi'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query(
    $koneksi,
    "insert into instansi values('','$nama','$alamat','$latitude','$longitude')"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_instansi.php');
