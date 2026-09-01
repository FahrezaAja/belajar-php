<?php


$name = "Fahreza";
$otherName = &$name; // & adalah operator reference yang digunakan untuk membuat variable $otherName menjadi reference dari variable $name
$otherName = "Mandala"; // jika variable $otherName diubah maka variable $name juga akan berubah karena variable $otherName adalah reference dari variable $name

echo "Name: $name" . PHP_EOL; // Output: Name: Mandala