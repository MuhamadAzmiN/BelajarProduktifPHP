<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpangkatan</title>
</head>
<body>
    <center><h3 style="margin-top: 40px;">Tabel Menghitung Sisa Bagi (Modulus)</h3></center>
    <center>
        <form action="" method="POST">
            <table border=1 style="margin-top: 20px;">
                <tr>
                    <td><label for="angka_pertama">Angka Pertama : </label></td>
                    <td><input type="number" name="angka_pertama" id="angka_pertama"></td>
                </tr>
                <tr>
                    <td><label for="angka_kedua">Angka Kedua : </label></td>
                    <td><input type="number" name="angka_kedua" id="angka_kedua"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Hitung</button></td>
                </tr>
            </table>
        </form>
    </center>
<?php

if (@$_POST['angka_pertama'] == "" || @$_POST['angka_kedua'] == "") {
    // echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
}   else {
    // echo "<p style='text-align: center; color: green; margin: 10px 0'>Siap diproses!</p>";
    $hasilSisabagi = $_POST['angka_pertama'] % $_POST['angka_kedua'];
    echo "<p style='text-align: center; margin: 10px 0;'>Hasil Sisa Bagi Dari " . "<b>" . 
    $_POST['angka_pertama'] . " % " . $_POST['angka_kedua'] . " = " . $hasilSisabagi . 
    "</b>" . "</p>";
}

if (@$_POST['angka_pertama'] == "" || @$_POST['angka_kedua'] == "") {
    echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
} else {
    // Hitung sisa bagi
    $hasilSisabagi = $_POST['angka_pertama'] % $_POST['angka_kedua'];

    // Jika hasil sisa bagi adalah 1
    if ($hasilSisabagi == 1 || $hasilSisabagi == 2) {
        $bilangan_terdekat = ($_POST['angka_pertama'] - 1);
        echo "<p style='text-align: center; margin: 10px 0;'>Bilangan terdekat adalah " . $bilangan_terdekat . 
        " yang merupakan perkalian " . floor($bilangan_terdekat / $_POST['angka_kedua']) . "*" . $_POST['angka_kedua'] . "</p>";
    } else {
        echo "<p style='text-align: center; margin: 10px 0;'>Hasil Sisa Bagi Dari " . "<b>" . 
        $_POST['angka_pertama'] . " % " . $_POST['angka_kedua'] . " = " . $hasilSisabagi . 
        "</b>" . "</p>";
    }
}


?>
</body>
</html>