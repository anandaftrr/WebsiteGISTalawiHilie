<?php
include 'koneksi.php';
($Q = mysqli_query($koneksi, 'SELECT * FROM sekolah where id_masjid=' . $id)) or
    die(mysqli_error());
if ($Q) {
    $posts = [];
    if (mysqli_num_rows($Q)) {
        while ($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }
    $data = json_encode(['results' => $posts]);
}
