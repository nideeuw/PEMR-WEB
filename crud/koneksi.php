<?php
// Koneksi ke database
$koneksi = pg_connect("host=localhost dbname=prakwebdb user=postgres password=tes123 port=5465");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . pg_last_error());
}
?>