<?php
include 'koneksi.php';
($Q = mysqli_query(
    $koneksi,
    'select count(nama_instansi) as sma FROM `instansi`'
)) or die(mysqli_error());
if ($Q) {
    $posts = [];
    if (mysqli_num_rows($Q)) {
        while ($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }
    $data = json_encode(['results' => $posts]);
}
