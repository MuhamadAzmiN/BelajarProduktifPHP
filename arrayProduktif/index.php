<?php
$nilai = [80,78,72,84,92,88];

echo "nilai saya adalah "; 
foreach($nilai as $ipai){
  echo ", " . $ipai;
};
echo "<br>";
echo " nilai yang paling kecil adalah " . min($nilai);
echo "<br>";

echo"nilai yang paling besar " . max($nilai);
echo"<br>";


echo "diurutkan nilai terkecil ";
function asik(){
sort($nilai);
foreach($nilai as $kecil2 ) {
  echo " , " .$kecil2;
}
}
echo "<br>";


echo "diurutkan nilai terbesar";
function epep (){
rsort($nilai);
  foreach($nilai as $besar3) {
echo " , " . $besar3;
  }
}
  echo "<br>";
  $sum = 0;
  echo "rata-rata = ";
  foreach($nilai as $rata2){
    $sum += $rata2 / 6;
  }
echo $sum;
echo "<br>";
echo "nilai sekarang";



$nilai[2] = 75;
foreach($nilai as $rubah){
  echo ", " . $rubah;
}


?>
