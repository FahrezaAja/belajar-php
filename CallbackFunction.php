<?php


function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Fahreza", function (string $name) : string {return strtoupper($name);});
sayHello("Fahreza", fn($name) => strtoupper($name));
sayHello("Fahreza", "strtoupper");