<?php
date_default_timezone_set("Asia/Jakarta");

$koneksi = pg_connect("host=localhost port=5465 dbname=jobsheet11 user=postgres password=tes123");

if (!$koneksi) {
    die("Koneksi gagal: " . pg_last_error());
}
?>