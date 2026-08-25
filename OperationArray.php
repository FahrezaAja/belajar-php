<?php


$first = [ "first_name" => "Fahreza", "last_name" => "Sekar"];
$last = [ "last_name" => "Sekar", "first_name" => "Fahreza"];

var_dump($first + $last); //akan membuat array baru dengan menggabungkan kedua array, jika key sama maka akan diambil dari array pertama

$full = $first + $last;
var_dump($full);

var_dump($first == $last); //akan mengembalikan true jika kedua array memiliki key dan value yang sama
var_dump($first === $last); //akan mengembalikan true jika kedua array memiliki key, value, dan urutan yang sama