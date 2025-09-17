<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Hasil Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";

echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil Not A: {$hasilNotA} <br>";
echo "Hasil Not B: {$hasilNotB} <br>";

echo "<br><br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil a += b : {$a} <br>";
echo "Hasil a -= b: {$a} <br>";
echo "Hasil a *= b: {$a} <br>";
echo "Hasil a /= b: {$a} <br>";
echo "Hasil a %= b: {$a} <br>";

echo "<br><br> Pembetulan Hasil 0 diatas <br><br>";

$tambah = $a += $b;
$kurang = $a -= $b;
$kali = $a *= $b;
$bagi = $a /= $b;
$sisaBagi = $a %= $b;

echo "Hasil a += b : {$tambah} <br>";
echo "Hasil a -= b: {$kurang} <br>";
echo "Hasil a *= b: {$kali} <br>";
echo "Hasil a /= b: {$bagi} <br>";
echo "Hasil a %= b: {$sisaBagi} <br>";

echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik : {$hasilTidakIdentik} <br>";

echo "<br><br>";

echo "<br><br> Sebuah perpustakaan memiliki 120 rak buku. 
Saat ini, 85 rak sudah terisi penuh dengan buku, sedangkan sisanya masih kosong. 
Hitunglah berapa persen rak buku yang masih kosong di perpustakaan tersebut.  <br><br>";

$rakBukuTotal = 120;
$rakBukuTerisi = 85;
$rakBukuKosong = $rakBukuTotal - $rakBukuTerisi;
$persenRakBukuKosong = ($rakBukuKosong / $rakBukuTotal) * 100;

echo "Total Rak Buku : {$rakBukuTotal} <br>";
echo "Total Rak Buku Terisi : {$rakBukuTerisi} <br>";
echo "Total Rak Buku Kosong : {$rakBukuKosong} <br>";
echo "Persen Rak Buku Kosong : {$persenRakBukuKosong} % <br>";
?>