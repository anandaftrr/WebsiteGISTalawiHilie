<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_sekolah'];
$nama = $_POST['nama_sekolah'];
$alamat = $_POST['alamat'];
$akreditasi = $_POST['akreditasi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query(
    $koneksi,
    "update sekolah set nama_sekolah='$nama', alamat='$alamat', akreditasi='$akreditasi', latitude='$latitude', longitude='$longitude' where id_sekolah='$id'"
);

// mengalihkan halaman kembali ke index.php
header('location:tampildata_sekolah.php');
