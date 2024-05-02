<?php

    //increment ++
        // for($i=1;$i <=50;$i++){
        //     if($i % 2 == 1){
        //         echo $i . "ganjil";
        //         echo "<br>";
                
        //     }else if($i % 2 == 0){
        //         echo $i . "genap";
        //         echo "<br>";
        //     }   
        // }

    // for($i = 1;$i<= 50;$i++){
    //     if($i % 2 == 0){
    //         echo $i . "genap";
    //     }
        
    // }
    for($i = 0;$i < 100;$i+= 5){
        echo $i;
        echo "<br>";
    }


    $angka = 0;
    while($angka < 100){
        $angka+= 5;
        echo "<br>";
        echo $angka;
    }






    echo "<br>";
    echo "ini do while". "<br>";
    $hai = 0;
    do {
        $hai+= 5;
        echo $hai;
        echo "<br>";
    }while($hai < 100);
    
    



?>