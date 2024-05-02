<?php
function isTahunKabisat($tahun) {
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Contoh penggunaan
$tahun1 = 2008;
$tahun2 = 2001;

if (isTahunKabisat($tahun1)) {
    echo $tahun1 . " adalah tahun kabisat\n";
} else {
    echo $tahun1 . " bukan tahun kabisat\n";
}

if (isTahunKabisat($tahun2)) {
    echo $tahun2 . " adalah tahun kabisat\n";
} else {
    echo $tahun2 . " bukan tahun kabisat\n";
}
