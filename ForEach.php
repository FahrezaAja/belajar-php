<?php


$names = ["Fahreza", "Mandala", "Putra"];


foreach ($names as $name) {
    echo "Data : $name" . PHP_EOL;
}


$person = [
    "first_name" => "Fahreza",
    "middle_name" => "Mandala",
    "last_name" => "Putra"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}