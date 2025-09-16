<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br> Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br><br>";

$totalSiswa = 10;
$nilai10Siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

for ($i = 0; $i < count($nilai10Siswa) - 1; $i++) {
    for ($j = 0; $j < count($nilai10Siswa) - $i - 1; $j++) {
        if ($nilai10Siswa[$j] > $nilai10Siswa[$j + 1]) {
            
            $temp = $nilai10Siswa[$j];
            $nilai10Siswa[$j] = $nilai10Siswa[$j + 1];
            $nilai10Siswa[$j + 1] = $temp;
        }
    }
}

$totalNilai = 0;
for ($i = 2; $i < count($nilai10Siswa) - 2; $i++) {
    $totalNilai += $nilai10Siswa[$i];
}
$rataRata = $totalNilai / (count($nilai10Siswa) - 4);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: {$totalNilai} <br>";
echo "Rata-rata nilai: {$rataRata} <br>";

echo "<br> Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon. <br><br>";

$hargaProduk = 120000;
$diskon = 20;

if ($hargaProduk > 100000){
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * ($diskon / 100));
    echo "Total Harga (Mendapat Diskon): Rp {$hargaSetelahDiskon} <br>";
} else {
    echo "Total Harga: Rp {$hargaProduk} <br>";
}

echo "<br> Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” <br><br>";

$poin1 = 550;
$poin2 = 500;

echo "Total skor pemain 1 adalah: {$poin1} <br>";
echo "Total skor pemain 2 adalah: {$poin2} <br>";

if ($poin1 > 500) {
    echo "Apakah pemain 1 mendapatkan hadiah tambahan? YA <br>";
} else {
    echo "Apakah pemain 1 mendapatkan hadiah tambahan? TIDAK <br>";
}

if ($poin2 > 500) {
    echo "Apakah pemain 2 mendapatkan hadiah tambahan? YA <br><br>";
} else {
    echo "Apakah pemain 2 mendapatkan hadiah tambahan? TIDAK <br><br>";
}
?>