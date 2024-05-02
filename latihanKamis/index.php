<?php


$angka = 1;
for($i = 1;$i <= 3;$i++){
    echo "<br>";
   for($angka = 1;$angka <= 10; $angka++){
    $hasilPerkalian = $i * $angka;
    echo "<br>";
   echo $angka . "*" . $i . "=" . $hasilPerkalian;
   }
}

    




$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ],
];
echo "<br>";
$i = 1;
foreach($data as $siswa){
   
    if(($siswa["tahun"] % 400 == 0 && $siswa["tahun"] % 100 != 0 ) || $siswa["tahun"] % 4 === 0){
        echo "<br>";
        echo $i . ". ". $siswa["nama"] . ":" . "lahir pada tahun kabisat " . "(" .$siswa["tahun"] . ")";

    }else {
        echo "<br>";
        echo $i . ". " . $siswa["nama"] .":" . "lahir bukan pada tahun kabisat ". "(" . $siswa["tahun"] . ")";
    }
    $i++;
}



$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
    
    
];


$sum = 0 ;
foreach($barang as $harga){
    $kali = ($harga["harga_barang"]*$harga["jumlah_beli"]);
    $sum += $kali;

    
}
echo "<br>";
echo "<br>";
echo "<p>Total yang harus dibayar  <span style='font-weight: bold;''>$sum</span></p>";
// ternary
echo "<br>";
foreach($data as $tahun){
    $nama = $tahun["nama"];
    $year = $tahun["tahun"];
    $keterangan = $year % 4 == 0 ? 'tahun kabisat' : 'bukan tahun kabisat' ;
    echo "<br>";
    echo $nama . " lahir " . $keterangan . " (" . $year. ")";
}
// 



$summ = 0;
foreach($barang as $harga){
    $harga = $harga["harga_barang"];
    $jumlahBeli = $harga["jumlah_beli"];
    $keterangan = $harga * $jumlahBeli;
    $summ += $keterangan;
    echo $summ;
}
