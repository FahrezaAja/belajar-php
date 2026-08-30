<?php


//variabel function


function boo(){
    echo "BOO" . PHP_EOL;
}

$panggilfunction = "boo";

$panggilfunction();

//penggunaan variabel function


function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
}

function sample($name) : string {
    return "sample $name";
}

sayHello("Fahreza","strtoupper");
sayHello("Fahreza","strtolower");
sayHello("Fahreza","sample");