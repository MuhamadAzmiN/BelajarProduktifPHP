<?php 
$nilai1 = 17;
$nilai2 = 20;
$besar = $nilai1 > $nilai2;
$kecil = $nilai1 < $nilai2;
$sama = $nilai1 == $nilai2;
$tidakSama = $nilai1 != $nilai2;

echo "$nilai1 > $nilai2 = $besar";
echo "<br>";
echo "$nilai1 < $nilai2 = $kecil";
echo "<br>";
echo "$nilai1 == $nilai2 = $sama";
echo "<br>";
echo "$nilai1 != $nilai2 = $tidakSama";



echo "<br>";
echo "<hr>";
echo "tugas kedua";

$nilai3 = "20";
$nilai4 = 20;

$cek = $nilai3 == $nilai4 ;
$cekData = $nilai3 === $nilai4;
$salah = $nilai3 != $nilai4;
$salahData = $nilai3 !== $nilai4;
echo "<br>";
echo "$nilai3 == $nilai4 = $cek";
echo "<br>";
echo "$nilai3 === $nilai4 = $cekData";
echo "<br>";
echo "$nilai3 != $nilai4 = $salah";
echo "<br>";
echo "$nilai3 !== $nilai4 = $salahData";








?>