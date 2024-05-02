<?php


$nilai = 20;




if($nilai >= 85){
    $ket = "A";
}elseif($nilai >= 68){
    $ket = "B";
}elseif($nilai >= 56){
    $ket ="C";
}elseif($nilai >= 45){
    $ket = "D";
}else{
    $ket = "E";
}


echo "<br>";
if($ket == "A"){
    $lulus = "LULUS";
}else if($ket == "B"){
    $lulus = "LULUS";
}elseif($ket == "C"){
    $lulus = "LULUS";
}else if($ket == "D"){
    $lulus = "TIDAK LULUS";
}else {
    $lulus = "TIDAK LULUS";
}
echo "Nilai anda . $nilai ";
echo "anda dapet nilai. $ket $";
echo "keterangan lulus. $lulus";


echo "<br>";

$kondisi = $nilai >= 85 ? "Nilai anda A trus anda LULUS":($nilai >= 68 ? "Nilai anda B trus anda LULUS":($nilai >= 56 ? "Nilai anda C trus anda LULUS":($nilai >= 45?"tidak lulus D":($nilai <= 45?"E tidak lulus":"ulang 1 tahun"))));
echo $kondisi;
?>