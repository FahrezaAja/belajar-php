<?php


function sum(int $first, int $last) : int{
    return $first + $last;
}

$total = sum(10, 10);
var_dump($total);


function getFinalValue(int $value): string {
    if($value >=80){
        return "A";
    } else if($value >=70){
        return "B";
    } else {
        return "C";
    }
}

$result = getFinalValue(90);

echo $result;