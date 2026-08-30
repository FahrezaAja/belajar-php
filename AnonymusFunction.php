<?php


//anonymus function biasanya dibuat di dalam varianbel

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Fahreza");


//anonymus function sebagai argumen

function sayGoodbye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodbye("Fahreza", function (string $name){
    return strtoupper($name);
});

//anonymus mengakses variabel di luar function wajib menggunakan use

//contoh

$firstName = "Fahreza";
$lastName = "Putra";

$sayHelloEja = function() use ($firstName, $lastName){ //wajib menggunakan use karena jika tidak menggunakan maka akan terjadi error
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloEja();