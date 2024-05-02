
<?php
$text = "";
$text2 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat_badan = $_POST["berat_badan"];
    $tinggi_badan = $_POST["tinggi_badan"];

    if (is_numeric($berat_badan) && is_numeric($tinggi_badan)) {
        $imt = hitungIMT($berat_badan, $tinggi_badan);
        
        $klasifikasi = klasifikasiIMT($imt);
        
        $text =  "<p>IMT Anda adalah: " . number_format($imt, 2) . "<br>" ;
        $text2 = "Klasifikasi IMT: " . $klasifikasi;
    } else {
        echo " <h5>Masukkan bilangan yang valid untuk berat badan dan tinggi badan.</h5>";
    }
}

function hitungIMT($berat_badan, $tinggi_badan) {
    $imt = $berat_badan / ($tinggi_badan * $tinggi_badan);
    return $imt;
}

function klasifikasiIMT($imt) {
    if ($imt < 18.5) {
        return "sangat kurus";
    } elseif ($imt >= 18.5 && $imt < 24.9) {
        return "normal";
    } elseif ($imt >= 25 && $imt < 39.9) {
        return "kelebihan berat badan";
    } else {
        return "obese";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<style>
    /* CSS untuk styling formulir */

    body {
        background-color: #1f242d;
        font-family: poppins;
    }
.container form {
    padding: 20px;
    border-radius: 10px;
}

.container {
    position: absolute;
    /* display: flex;
    align-items: center; */
    background-color: #41C9E2;
    margin: 150px 250px;
    width: 700px;
    height: 350px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.container span {
    color: orange;
}

.input {
    display: flex;
}

label {
    display: block;
    margin-bottom: 8px;
    color: black;
    font-weight: bold;
}

input[type="text"] {
    width: 300px;
    height: 30px;
    padding: 12px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #f9f9f9;
    color: #333;
    font-size: 9px;
}

input[type="submit"] {
    width: 200px;
    height: 30px;
    padding: 8px;
    font-size: 9px;
    font-weight: 500;
    font-family: poppins;
    background-color: #5356FF;
    color: white;
    border: 2px solid #5356FF;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

input[type="submit"]:hover {
    background-color: transparent;
    color: #5356FF;
    
}

.from input {
    display: flex;
    margin: 10px;
}
::placeholder {
    font-weight: bold;
    color: black;
}
.text p  {
    display: flex;
    align-items: center;
    justify-content: center;
}
.text span {
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
   <div class="container">
        <div class="text">
        <span style="font-size: 50px;"  class="material-symbols-outlined">
            mark_email_unread
        </span>

            <p>IMT</p>
            <P>SANGAT KURUS</P>
        </div>
        <div class="from">
        <form method="post">
            <div class="input">
                <label for="berat_badan"></label>
                <input type="text" id="berat_badan" name="berat_badan" placeholder="Berat Badan" ><br></br>
                
                <label for="tinggi_badan"></label>
                <input type="text" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan" ><br></br>
                
                <input type="submit" value="Hitung IMT">
                </div>
            </form>
        </div>
   </div>
    
    
</body>
</html>