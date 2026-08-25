<?php

//tanpa null coalescing operator
$data = [];

// if (isset($data["Content"])) {
//     $action = $data["Content"];
// } else {
//     $action = "Tidak ada content";
// }

// echo $action . PHP_EOL;

//menggunakan null coalescing operator
$action = $data["Content"] ?? "Tidak ada content";
echo $action . PHP_EOL;