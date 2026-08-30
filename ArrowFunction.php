<?php

$firstName = "fahreza";
$lastName = "putra";

$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;
//arrow function adalah seperti anonymus function namun lebih sederhana dan tidak bisa jika untuk function yang lebih rumit

echo $sayHello();