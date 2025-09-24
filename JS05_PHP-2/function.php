<?php

// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Nida<br>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br>";
// }

//memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();


//membuat fungsi
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br>";
//     echo "Senang berkenalan dengan Anda<br>";
// }

//memanggil fungsi yang sudah dibuat
// perkenalan("Naswa", "Hallo");

// echo "<hr>";

// $saya = "Nida";
// $ucapanSalam = "Selamat pagi";

//memanggil lagi
// perkenalan($saya, $ucapanSalam);

//membuat fungsi
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br>";
//     echo "Senang berkenalan dengan Anda<br>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Naswa", "Hallo");

// echo "<hr>";

// $saya = "Nida";
// $ucapanSalam = "Selamat pagi";

// // memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);

//membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }
    
    // echo "Umur saya adalah ". hitungUmur(2004, 2025)."tahun" //isi sesuai dengan tahun lahir kalian
    
    // membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br>";
        echo "Senang berkenalan dengan Anda<br>";

        //memanggil fungsi lain
        echo "Saya berusia ". hitungUmur(2004, 2025)." tahun<br>";
        echo "Senang berkenalan dengan anda<br>";
    }

    //memanggil fungsi perkenalan
    perkenalan("Nida");
    ?>