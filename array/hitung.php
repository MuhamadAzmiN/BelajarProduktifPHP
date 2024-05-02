<?php


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
$total_semua = 0;
foreach($barang as $bar){
    $hitung = ($bar["harga_barang"] * $bar["jumlah_beli"]);
    $total_semua += $hitung;
}
echo $total_semua;
