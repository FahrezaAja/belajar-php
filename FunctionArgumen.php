<?php


function sayHello($name) {
    echo "Hello $name" . PHP_EOL;
}

function sayHello2($name = "GANTENG") { //= adalah default value
    echo "Hello $name" . PHP_EOL;
}

sayHello("Fahreza");
sayHello2();
sayHello2("Sekar");



function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(10, 10);
sum("10", "10"); //PHP akan otomatis mengubah string menjadi integer
sum(true , false); //PHP akan otomatis mengubah boolean menjadi integer

function sumAll(...$values){
    $total = 0;

    foreach($values as $value){
        $total += $value;
    
    }

    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL; //fungsi implode() digunakan untuk menggabungkan array menjadi string dengan pemisah tertentu, dalam hal ini menggunakan tanda " + " sebagai pemisah antar elemen array.
}

sumAll(1,2,3,4,5);