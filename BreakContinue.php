<?php

$counter = 1;


while (true) {
    echo "Hello Break " . $counter . PHP_EOL;
    $counter++;
    if ($counter >= 10) {
        break;
    }
}



for($hitung = 1; $hitung <=100; $hitung++){
    if($hitung %2 == 0){
        continue;
    }

    echo "Hello Continue " . $hitung . PHP_EOL;
}