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

echo "<br> Seorang guru Bahasa Inggris ingin menghitung total nilai ujian dari 12 siswa di kelasnya. 
Untuk membuat penilaian lebih adil, guru memutuskan untuk mengabaikan dua nilai tertinggi dan dua nilai terendah dari daftar nilai yang ada. 
Setelah itu, guru akan menghitung total nilai dari sisa siswa untuk digunakan dalam menentukan rata-rata kelas. 
Nilai yang diperoleh 12 siswa tersebut adalah: 80, 95, 67, 72, 88, 91, 76, 84, 69, 93, 78, dan 85. <br><br>";

$nilai12Siswa = [80, 95, 67, 72, 88, 91, 76, 84, 69, 93, 78, 85];

for ($i = 0; $i < count($nilai12Siswa) - 1; $i++) {
    for ($j = 0; $j < count($nilai12Siswa) - $i - 1; $j++) {
        if ($nilai12Siswa[$j] > $nilai12Siswa[$j + 1]) {
            
            $temp = $nilai12Siswa[$j];
            $nilai12Siswa[$j] = $nilai12Siswa[$j + 1];
            $nilai12Siswa[$j + 1] = $temp;
        }
    }
}

$totalNilai = 0;
for ($i = 2; $i < count($nilai12Siswa) - 2; $i++) {
    $totalNilai += $nilai12Siswa[$i];
}
$rataRata = $totalNilai / (count($nilai12Siswa) - 4);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: {$totalNilai} <br>";
echo "Rata-rata nilai: {$rataRata} <br>";

echo "<br> Seorang pembeli ingin membeli sebuah jaket dengan harga Rp 250.000. 
Toko memberikan potongan harga sebesar 15% untuk setiap pembelian di atas Rp 200.000. 
Hitunglah berapa jumlah uang yang harus dibayar pembeli tersebut setelah mendapatkan diskon. <br><br>";

$hargaProduk = 250000;
$diskon = 15;
$jmlDiskon = ($hargaProduk * ($diskon / 100));

echo "Harga Jaket : {$hargaProduk}<br>";
echo "Potongan Diskon jika pembelian di atas 200.000 : {$diskon}%<br>";
if ($hargaProduk > 200000){
    $hargaSetelahDiskon = $hargaProduk - $jmlDiskon;
    echo  "Jumlah diskon di dapat: Rp {$jmlDiskon} <br>";
    echo "Total harus dibayar (Mendapat Diskon): Rp {$hargaSetelahDiskon} <br>";
} else {
    echo "Total harus dibayar: Rp {$hargaProduk} <br>";
}

echo "<br> Seorang atlet lari ingin menghitung total jarak yang telah ditempuh selama latihan. 
Jarak tersebut dihitung dari akumulasi kilometer yang berhasil dicapai setiap harinya. 
Jika total jarak yang ditempuh lebih dari 100 km, maka atlet tersebut akan mendapatkan bonus latihan khusus. 
Buatlah tampilan pada baris pertama dengan teks “Total jarak tempuh atlet adalah: (kilometer)” 
dan pada baris kedua dengan teks “Apakah atlet mendapatkan bonus latihan? (YA/TIDAK)”  <br><br>";

$jarak1 = 150;
$bonusLatihan1 = ($jarak1 > 100) ? "Ya": "Tidak";
echo "Total jarak yang telah ditempuh oleh atlet 1 adalah: {$jarak1} <br>";
echo "Apakah atlet 1 mendapatkan bonus latihan? {$bonusLatihan1} <br>";
echo "<br>";
$jarak2 = 98;
$bonusLatihan2 = ($jarak2 > 100) ? "Ya": "Tidak";
echo "Total jarak yang telah ditempuh oleh atlet 2 adalah: {$jarak2} <br>";
echo "Apakah atlet 2 mendapatkan bonus latihan? {$bonusLatihan2} <br>";
?>