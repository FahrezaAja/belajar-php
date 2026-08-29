<?php

goto a;

echo "Hello World" . PHP_EOL;

a: 
echo "Hello Goto" . PHP_EOL;


//goto di dalam loop

$counter = 1;

while (true) {
    echo "Hello While ". $counter . PHP_EOL;
    $counter++;
    if ($counter > 10 ) {
        goto end;
    }
}

end:
echo "Perulangan Berhenti" . PHP_EOL;