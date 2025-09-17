<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);

echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eve', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(", ",
$karyawanPengalamanLimaTahun);

echo "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br> Seorang guru IPA ingin mencetak daftar nilai siswa pada ujian Fisika. 
Data nilai yang dimiliki guru terdiri dari nama dan nilai ujian masing-masing siswa, yaitu Andi memperoleh 75, 
Budi memperoleh 88, Citra memperoleh 95, Dinda memperoleh 70, dan Farhan memperoleh 82. 
Guru tersebut ingin mengetahui siswa-siswa yang mendapatkan nilai di atas rata-rata kelas agar dapat diberikan penghargaan. 
Oleh karena itu, guru perlu menghitung rata-rata nilai dari seluruh siswa, kemudian mencetak daftar siswa 
yang memiliki nilai lebih tinggi dari rata-rata beserta nilai yang diperoleh.  <br><br>";


$daftarNilai = [
    ["Andi", 75],
    ["Budi", 88],
    ["Citra", 95],
    ["Dinda", 70],
    ["Farhan", 82],
];

$total = 0;
$jumlah = 0;

foreach ($daftarNilai as $data) {
    $total += $data[1];
    $jumlah++;
}

$rataRata = $total/$jumlah;

echo "Rata-rata nilai seluruh siswa = " . $rataRata . "<br><br>";

echo "Daftar siswa dengan nilai di atas rata-rata <br>";
foreach ($daftarNilai as $data) {
    $nama = $data[0];
    $nilai = $data[1];  

    if ($nilai > $rataRata) {
        echo $nama ." : ". $nilai ."<br>";
    }
};
?>