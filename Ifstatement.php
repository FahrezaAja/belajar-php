<?php

$absen = 7;
$nilai = 70;

if ($absen >=7 && $nilai >= 80) {
    echo "Nilai A" . PHP_EOL;
} else if ($absen >= 7 && $nilai >=70 ) {
    echo "Nilai B" . PHP_EOL;
} else {
    echo "Nilai C" . PHP_EOL;
}

//atau di php bisa seperti ini

if ($absen >=7 && $nilai >= 80) :
    echo "Nilai A" . PHP_EOL;
elseif ($absen >= 7 && $nilai >=70 ) :
    echo "Nilai B" . PHP_EOL;
else :
    echo "Nilai C" . PHP_EOL;
endif;