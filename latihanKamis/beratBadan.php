<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpangkatan</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <table border=1 style="margin-top: 20px;">
                <tr>
                    <td><label for="angka_pertama">Berat Badan : </label></td>
                    <td><input type="number" name="angka_pertama" id="angka_pertama"></td>
                </tr>
                <tr>
                    <td><label for="angka_kedua">tinggi Badan : </label></td>
                    <td><input type="number" name="angka_kedua" id="angka_kedua"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Cek ideal</button></td>
                </tr>
            </table>
        </form>
    </center>
<?php

$berat = $_POST["angka_pertama"];
$tinggiBadan = $_POST["angka_kedua"];
if (@$_POST['angka_pertama'] == "" || @$_POST['angka_kedua'] == "") {
    echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
}   else {
$tinngiHasil = $tinggiBadan / 100;
$tinngiH = $tinngiHasil ** 2;
$baratH = floor($berat / $tinngiH);


if($baratH >= 30){
    echo "yang anda masukan adalah tidak valid:(";
    return false;
}

if(strlen($_POST["angka_kedua"]) > 3){
    echo "yang anda masukan tidak sesuai peraturan";
    return false;
}


if($baratH <= 18.5){
    echo "sangatlah kurus";
    echo "<img src='https://cdn0-production-images-kly.akamaized.net/0vVCov1neAWDI18v5O30t5u27P0=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1149448/original/1c6cab9c9d5b3f81147d6def72da33e3-096794100_1456121138-kaskus.jpg' width='200px' height='70px' alt=''>;";


}else if($baratH >= 18.5 && $baratH <= 23){
    echo "berat badan normal";
}
echo $baratH;
   
}




?>

<script>
</script>
</body>
</html>