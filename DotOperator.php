<?php

$nama = "Fahreza";

echo "Nama : " . $nama . PHP_EOL; // . berfungsi untuk menggabungkan string
echo "Umur : " . 22 . PHP_EOL;

//konversi dari string ke integer atau sebaliknya

$valueString = (string) 100; //konversi dari integer ke string
var_dump($valueString);

$valueInteger = (int) "100"; //konversi dari string ke integer
var_dump($valueInteger);

$valueFloat = (float) "100.5"; //konversi dari string ke float
var_dump($valueFloat);

//mengakses string

$fahreza = "Sekar";

echo $fahreza[0] . PHP_EOL; //mengakses karakter pertama dari string

//menggunakan variabel di dalam string

echo "Nama saya adalah $nama" . PHP_EOL; //menggunakan variabel di dalam string tidak perlu menggunakan . (dot)

//curly braces untuk mengakses variabel di dalam string
echo "Nama saya adalah {$nama}s" . PHP_EOL; //menggunakan variabel di dalam string dengan menggunakan curly braces jika ingin menggabungkan variabel dengan huruf selanjutnya tanpa ada spasi