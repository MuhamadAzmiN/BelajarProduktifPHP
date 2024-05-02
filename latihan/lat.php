<?php

$vip = 50;
$eks = 50;
$eko = 50;

$keuntunganVip = 0; // Memberikan nilai default
$keuntunganEks = 0; // Memberikan nilai default
$keuntunganEkonomi = 0;

if ($vip >= 35) {
    $keuntunganVip = 25;
} elseif ($vip >= 20) {
    $keuntunganVip = 15;
} else {
    $keuntunganVip = 5;
}

if ($eks >= 40) {
    $keuntunganEks = 20;
} elseif ($eks >= 20 && $eks < 40) {
    $keuntunganEks = 10;
} elseif ($eks < 20) {
    $keuntunganEks = 7;
}

if ($eko >= 1) {
    $keuntunganEkonomi = 7;
}

$total = $vip + $eks + $eko;
$totalKeseluruhan = $keuntunganEkonomi + $keuntunganEks + $keuntunganVip;

$persentaseEks = ($keuntunganEks / $eks) * 100;
$persentaseVip = ($keuntunganVip / $vip) * 100;
$persentaseEkonomi = ($keuntunganEkonomi / $eko) * 100;

echo "Keuntungan Keseluruhan: $totalKeseluruhan<br>";
echo "Persentase Keuntungan Eks: $persentaseEks%<br>";
echo "Persentase Keuntungan Vip: $persentaseVip%<br>";
echo "Persentase Keuntungan Ekonomi: $persentaseEkonomi%<br>";
echo "<br>";
echo "Jumlah Tiket Per Kelas:<br>";
echo "$vip tiket VIP<br>";
echo "$eks tiket Ekssekutif<br>";
echo "$eko tiket Ekonomi<br>";
echo "<br>";
echo "Total Keseluruhan Tiket Per Kelas: $total";





























?>