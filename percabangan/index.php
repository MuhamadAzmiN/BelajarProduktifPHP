<?php


// $nilai = 20;
// $kondisi = $nilai <= 10 ? "baggus " :($nilai == 20 ? "good" : "butut") ;

// for($i=1;$i<10;$i++){
//     echo "<br>";
//     echo $i;
// }
// echo $kondisi;


// $p = 1;

// while($p < 10){
//     echo $p;
//     $p++;
// }
// echo "
// <br>";
// do {
//     echo $p;
//     $p++;

// }while($p < 10);

$bintang = "*";

for ($i = 1; $i < 10; $i++) {
    echo "<center>";
    $count = 1; // Initialize count for the while loop
    
    while ($count <= $i) 
    {
        
        echo $bintang;
        $count++;
    }
// Add a new line after each row
}
