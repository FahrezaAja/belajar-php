<?php

$nama = "Fahreza";
$nama = null;

$umur = null;

//untuk mengecek apakah nilai adalah null dapat menggunaakn is_null()

echo "Apakah null?";
echo "\t";
echo is_null($nama); //nilainya akan boolean, atau agar lebih enak dapat gunakan var_dump()
echo "\n";
echo "Apakah null?";
echo "\t";
var_dump(is_null($nama));

//jika ingin menghapus variabel maka dapat gunakan unset()

//contoh

$contoh = "Ini adalah contoh";
unset($contoh);

//echo $contoh; //akan error karena variabel sudah dihapus

//gunakan isset() untuk mengecek apakah variabel sudah dihapus atau belum atau bernilai tidak null
var_dump(isset($contoh)); //akan false karena variabel sudah dihapus atau bernilai null