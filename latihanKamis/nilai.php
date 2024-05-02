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
                    <td colspan="2"><button type="submit">Input Nilai</button></td>
                </tr>
            </table>
        </form>
    </center>
<?php

if(@$_POST["angka_pertama"] >= 80 && $_POST["angka_pertama"] <= 90){
    echo "<h1 style='color: greenyellow; text-align: center; ; margin: 10px 0''>Kompeten</p>";


}else {
    echo "<h1 style='color: red; text-align: center; color: red; margin: 10px 0''>Remed</p>";

}


?>
</body>
</html>