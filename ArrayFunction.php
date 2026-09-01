<?php

$data = [1,2,3,4,5,6,7];

var_dump(array_map(fn($value) => $value * 2, $data)); // ini berfungsi untuk mengubah setiap data di dalam array $data menjadi 2 kali lipat dari nilai aslinya. Hasilnya akan menjadi array baru dengan nilai yang sudah diubah.
rsort($data); // ini berfungsi untuk mengurutkan data di dalam array $data dari yang terbesar ke yang terkecil. Hasilnya akan menjadi array baru dengan nilai yang sudah diurutkan.
var_dump($data);

var_dump(array_keys($data)); // ini berfungsi untuk mengambil semua key dari array $data. Hasilnya akan menjadi array baru yang berisi semua key dari array $data.
var_dump(array_values($data)); // ini berfungsi untuk mengambil semua value dari array $data