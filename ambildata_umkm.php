<?php
include 'koneksi.php';
$Q = mysqli_query($koneksi, 'SELECT * FROM umkm');
if ($Q) {
    $posts = [];
    if (mysqli_num_rows($Q)) {
        while ($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }
    $data = json_encode(['results' => $posts]);
    echo $data;
}
