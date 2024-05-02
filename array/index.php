<?php
$tahun = [
    [
        "tahun" => 2008,
        "nama" => "andi",
    ],
    [
        "tahun" => 2001,
        "nama" => "udin",
    ]
];

foreach ($tahun as $thn) {
    $nama = $thn["nama"];
    if (($thn["tahun"] % 400 == 0 && $thn["tahun"] % 100 != 0) || $thn["tahun"] % 4 == 0) {
        echo "Ini adalah tahun kabisat: " . $thn["tahun"] . $nama .  "\n";
        echo "<br>";
    } else {
        echo "Ini adalah BUKAN tahun kabisat: " . $thn["tahun"] . $nama .  "\n";
    }
}
