<?php

function kurangAngka($angka1, $angka2){
    $hasilKurang = $angka1 - $angka2;
    echo "<br>";
    echo "function pengurangan " . $hasilKurang;
}

function pangkat($angka1 , $angka2){
    $hasilPangkat = $angka1  ** $angka2;
    echo "<br>";
    echo "function pangkat " . $hasilPangkat;
}

function perbandingan($angka1, $angka2, $angka3){
    // $hasilPerbandingan = $angka1 < $angka2;
    // echo "<br>";
    // echo "function perbandingan " . $hasilPerbandingan;
    $nilai = [
        "angka1" => $angka1,
        "angka2" => $angka2,
        "angka3" => $angka3
    ];
    rsort($nilai);
    foreach($nilai as $angka){
        echo $angka;

    }
}


kurangAngka(56,67);
kurangAngka(112,70);
kurangAngka(119,89);

echo "<br>";

// pangkat 
pangkat(2,5);
pangkat(6,4);
pangkat(12,6);


echo "<br>";


perbandingan(2,4,5);
perbandingan(9,7,3);
perbandingan(8,12,6);