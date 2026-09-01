<?php

var_dump(join(",", [1,2,3,4,5,6,7])); // Output: string(11) "Hello World"
var_dump(explode(" ", "Fahreza Mandala Putra")); // Output: array(3) { [0]=> string(7) "Fahreza" [1]=> string(6) "Mandala" [2]=> string(6) "Putra" }
var_dump(trim("   Fahreza Mandala Putra   ")); // Output: string(21) "Fahreza Mandala Putra"
var_dump(substr("Fahreza Mandala Putra", 0, 7)); // Output: string(7) "Fahreza"