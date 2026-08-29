<?php


$names = ["Fahreza", "Mandala", "Putra"];


foreach ($names as $name) { // $name adalah variable sementara yang akan menampung data dari array $names
    echo "Data : $name" . PHP_EOL; // akan menampilkan data dari array $names atau seluruh data yang ada di array $names
}


$person = [
    "first_name" => "Fahreza",
    "middle_name" => "Mandala",
    "last_name" => "Putra"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}