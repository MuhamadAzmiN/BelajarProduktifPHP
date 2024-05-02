<?php 

$string1 = "ini adalah jenis string sederhana";
$string2 ="variable ini juga tidak otomatis otomatis di tampilkan : $string1";


echo $string1; echo "<br>";
echo $string2;
echo "<br>";







$stringa = "ini adalah contoh string sederhana 2";
$stringb = "variable akan otomatis di tampilkan : $stringa";



echo $stringa;
echo "<br>";

echo $stringb;



$nama = "Azmi";
$umur = 15;
echo "<br>";
echo "Nama saya adalah ", $nama, " saya berumur ",  $umur, "<br>";
echo "Nama saya adalah", $nama, "saya berumur ", $umur, "<br>";


$a = "1";
$b = 2;
echo $a + $b;










?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        color:red;
        font-size:10px;
    }
</style>
<body>
    <h1>
        <?php echo $nama;?>
    </h1>
</body>
</html>