<?php
// no 2
$age = 23;
$result = $age >= 17 ? "buat ktp" : "belum cukup umur";
echo "umur anda $age $result";

echo "<br>";
// no 2
if($age >= 17){
    $hasi = "sok buat ktp";
}else {
    $hasi = "belum cukup umur cuakss";
}
echo $hasi;

echo "<br>";

$umur = 6;
if($umur >= 25){
    $resu = "maka dewasa";
}else if($umur >= 12){
    $resu = "maka remaja";
}else if($umur >= 5){
    $resu = "maka anak anak";
}else {
    $resu = "maka anda balita";
}

echo $resu;
echo "<br>";
// no 3
$resum = $umur >= 25 ? "maka dewasa":($umur >= 12 ? "maka remaja":($umur >= 5 ? "maka anak anak":"maka anda balita")) ;

echo $resum;

echo "<br>";
echo "<br>";
$nilai = 80;
$nilaiAsli = $nilai >= 90 ? "GRADE A":($nilai > 80 ? "GRADE B":($nilai > 70 ? "GRADE C":($nilai <= 70 ? "GRADE D" : "semangat")));
echo "jadi nilai nya adalah $nilaiAsli";


echo "<br>";
// no 4
$DPK = 70;
$MTK = 87;
$agama = 80;
$mean = floor ($DPK + $MTK +$agama)/3;
$rataRata = $mean >= 90 ? "maka sangat bagus":($mean >= 85 ? "maka bagus":($mean >= 80 ? "maka sangat baik":($mean >= 70 ? "maka baik":($mean < 70? "maka kurang":"semangat"))));
echo $rataRata;
echo "<br>";
echo $mean;

echo "<br>";
// no 5
$x = 20;
$y = 30;
$kondisi = $x == $y ? "nilai sama":($x > $y? "nilai lebih besar":($x < $y?"nilai kurang":"gatau"));
echo $kondisi;

?>