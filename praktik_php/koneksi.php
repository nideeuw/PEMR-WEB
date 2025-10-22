<?php
// --- KONFIGURASI KONEKSI POSTGRESQL ---
$host = 'localhost';
$port = '5465';
$dbname = 'prakwebdb';
$user = 'postgres';
$pass = 'tes123';

// Membuat koneksi
$connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$connect) {
    die('Koneksi gagal: ' . pg_last_error());
}

// Set encoding (opsional tapi dianjurkan)
pg_set_client_encoding($connect, 'UTF8');
?>