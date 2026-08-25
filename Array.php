<?php

$value = array("Fahreza", "Sekar", "Ayu", "Putra");

var_dump($value);

//atau bisa seperti ini

$nama = [
    "Fahreza",
    "Sekar",
    "Ayu",
    "Putra"
];

var_dump($nama);


//operasi di array 

echo $nama[0]; //akan menampilkan Fahreza
echo "\n";

//untuk mengubah isi dari array dapat menggunakan indexnya
$nama[0] = "Fahreza Sekar";

echo $nama[0]; //akan menampilkan Fahreza Sekar

//untuk menambah array di paling belakang

$nama[] = "Fahreza Sekar Putra";

var_dump($nama);

//untuk menghapus array dapat menggunakan unset()

unset($nama[0]);

echo "\n";
var_dump($nama); //akan menampilkan array tanpa index 0

//untuk menghitung total array
count($nama); //akan menampilkan 3 karena index 0 sudah dihapus
echo "\n";
echo "Total array: " . count($nama); //akan menampilkan 3 karena index 0 sudah dihapus


//membuat map di php

$fahreza = [
    "id" => 1,
    "nama" => "Fahreza Sekar Putra",
    "umur" => 20,
    "alamat" => "Jl. Raya No. 1"
]; //nama adalah key dan "Fahreza Sekar Putra" adalah value

var_dump($fahreza);
//jadi untuk mengambillnya seperti ini

var_dump($fahreza["nama"]); //akan menampilkan Fahreza Sekar Putra

//array di dalam array

$sekar = [
    "id" => 2,
    "nama" => "Sekar",
    "alamat" => [
        "kota" => "Merauke",
        "Provinsi" => "Papua"
    ]
];

var_dump($sekar);
var_dump($sekar["alamat"]["kota"]); //akan menampilkan Merauke